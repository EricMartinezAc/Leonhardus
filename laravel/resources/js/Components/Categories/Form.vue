<script>
export default {
    name: "Welcome",
};
</script>
<script setup>
import FormSection from '@/Component/FormSection.vue';
import InputError from '@/Component/InputError.vue';
import InputLabel from '@/Component/InputLabel.vue';
import PrimaryButton from '@/Component/PrimaryButton.vue';
import TextInput from '@/Component/TextInput.vue';

    defineProps({
        form: {
            type: Object,
            required: true,
        },
        updating: {
            type: Boolean,
            required: false,
            default: false,
        },
    });
    defineEmits(['submit'])
</script>

<template>
    <FormSection @submited="$emit('submit')">
        <template #title>
            {{ updat ? 'Update Category' : 'Create Category' }}
        </template>

        <template #description>
            {{ updating ? 'to update the category' : 'to create a new category' }}
        </template>

        <template #form>
            <div class="col-span-6 sm:col-span-4">
                <InputLabel for="name" value="Name" />  
                <TextInput id="name" v-model="form.name" type="text" autocomplete="name" class="mt-1 block w-full"/>
                <InputError :message="$page.props.errors.name" class="mt-2" />"
            </div>
        </template>

        <template #actions>
            <PrimaryButton>{{ updating ? 'Update' : 'Create' }}</PrimaryButton>
        </template>
    </FormSection>
</template>
