<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Users</h2>
    </template>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      <ul v-if="users.length">
        <li v-for="user in users" :key="user.message">{{ user.name }}</li>
      </ul>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout'

export default {
  props: {
    users: Array,
  },
  components: {
    AppLayout,
  },
}
</script>
