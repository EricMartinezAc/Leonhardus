<script>
export default {
  name: "Dashboard",
};
</script>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from "@inertiajs/vue3";
defineProps({
  categories: {
    type: Object,
    required: true,
  },
});
const deleteCategory = (id) => {
  if (confirm("Are you sure?")) {
    Inertia.delete(route("categories.destroy", id));
  }
};
</script>

<template>
  <AppLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Categories
      </h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="p-6 bg-white border-b border-gray-200">
          <div class="flex justify-between">
            <Link
              :href="route('categories.create')"
              class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
              v-if="$page.props.user.permissions.includes('create-category')"
            >
              + create category
            </Link>
          </div>

          <!-- //Cards categories reads -->
          <div class="mt-4">
            <ul role="list" class="divide-y divide-gray-100">
              <li
                class="flex justify-between gap-x-6 py-5"
                v-for="category in categories.data"
                :key="category.id"
              >
                <div class="flex min-w-0 gap-x-4">
                  <div class="min-w-0 flex-auto">
                    <p class="text-lg font-semibold leading-6 text-gray-900">
                      {{ category.name }}
                    </p>
                  </div>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                  <Link
                    :href="route('categories.edit', category.id)"
                    class="text-indigo-600 hover:text-indigo-900"
                  >
                    Edit
                  </Link>
                  <button
                    @click="deleteCategory(category.id)"
                    class="text-red-600 hover:text-red-900"
                  >
                    Delete
                  </button>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </AppLayout>
</template>
