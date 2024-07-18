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
    </FormSection>
</template>
