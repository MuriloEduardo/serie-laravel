<template>
  <app-layout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">Posts</h2>
    </template>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      <ul v-if="posts.length">
        <li v-for="post in posts" :key="post.message">{{ post.title }}</li>
      </ul>
    </div>
  </app-layout>
</template>
<script>
import AppLayout from '@/Layouts/AppLayout'

export default {
  props: {
    posts: Array,
  },
  components: {
    AppLayout,
  },
}
</script>
