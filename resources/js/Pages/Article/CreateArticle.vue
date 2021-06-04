<template>
    <app-layout>
        <jet-authentication-card>
            <template #logo>
                <jet-authentication-card-logo />
            </template>

            <jet-validation-errors class="mb-4" />

            <form @submit.prevent="submit">
                <div>
                    <jet-label for="title" value="Title" />
                    <jet-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autofocus autocomplete="title" />
                </div>

                <div>
                    <jet-label for="description" value="Description" />
                    <jet-input id="description" type="text" class="mt-1 block w-full" v-model="form.description" required autofocus autocomplete="description" />
                </div>

                <div>
                    <jet-label for="keywords" value="Keywords" />
                    <jet-input id="keywords" type="text" class="mt-1 block w-full" v-model="form.keywords" required autofocus autocomplete="keywords" />
                </div>

                <!-- Profile Photo -->
                <div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos">
                    <!-- Profile Photo File Input -->
                    <input type="file" class="hidden"
                                ref="photo"
                                @change="updatePhotoPreview">

                    <jet-label for="photo" value="Photo" />

                    <!-- New Profile Photo Preview -->
                    <div class="mt-2" v-show="photoPreview">
                        <span class="block rounded-full w-20 h-20"
                            :style="'background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(\'' + photoPreview + '\');'">
                        </span>
                    </div>

                    <jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewPhoto">
                        Select A New Photo
                    </jet-secondary-button>

                    <jet-input-error :message="form.errors.photo" class="mt-2" />
                </div>

                <!-- Text -->
                <div class="col-span-6 sm:col-span-4" v-if="$page.props.jetstream.managesProfilePhotos">
                    <!-- Text File Input -->
                    <input type="file" class="hidden"
                                ref="text">

                    <jet-label for="text" value="Text" />

                    <jet-secondary-button class="mt-2 mr-2" type="button" @click.prevent="selectNewText">
                        Select A New Text
                    </jet-secondary-button>

                    <jet-input-error :message="form.errors.text" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <jet-button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Create Article
                    </jet-button>
                </div>
            </form>
        </jet-authentication-card>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import JetButton from '@/Jetstream/Button'
    import JetAuthenticationCard from '@/Jetstream/AuthenticationCard'
    import JetAuthenticationCardLogo from '@/Jetstream/AuthenticationCardLogo'
    import JetInput from '@/Jetstream/Input'
    import JetCheckbox from "@/Jetstream/Checkbox";
    import JetValidationErrors from '@/Jetstream/ValidationErrors'
    import JetFormSection from '@/Jetstream/FormSection'
    import JetInputError from '@/Jetstream/InputError'
    import JetLabel from '@/Jetstream/Label'
    import JetActionMessage from '@/Jetstream/ActionMessage'
    import JetSecondaryButton from '@/Jetstream/SecondaryButton'

    export default {
        components: {
            AppLayout,
            JetAuthenticationCard,
            JetAuthenticationCardLogo,
            JetCheckbox,
            JetValidationErrors,
            JetActionMessage,
            JetButton,
            JetFormSection,
            JetInput,
            JetInputError,
            JetLabel,
            JetSecondaryButton
        },

        data() {
            return {
                form: this.$inertia.form({
                    _method: 'POST',
                    title: '',
                    description: '',
                    keywords: '',
                    photo: null,
                    text: null,
                }),

                photoPreview: null,
            }
        },

        methods: {
            submit() {

                if (this.$refs.photo) {
                    this.form.photo = this.$refs.photo.files[0]
                }

                if (this.$refs.text) {
                    this.form.text = this.$refs.text.files[0]
                }

                this.form.post(this.route('createArticle'), {
                })
            },

            selectNewPhoto() {
                this.$refs.photo.click();
            },

            selectNewText() {
                this.$refs.text.click();
            },

            updatePhotoPreview() {
                const photo = this.$refs.photo.files[0];

                if (! photo) return;

                const reader = new FileReader();

                reader.onload = (e) => {
                    this.photoPreview = e.target.result;
                };

                reader.readAsDataURL(photo);
            }
        }
    }
</script>
