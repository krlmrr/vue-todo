<template>
  <div class="w-full px-8 py-4 h-screen bg-gray-200">
      <h1 class="text-center text-2xl">VueTodo</h1>
      <add-item-form />
      <list-view />
  </div>
</template>

<script>

import addItemForm from './Components/addItemForm.vue'
import listView from './Components/listView.vue'

  export default {
    components: {
      addItemForm,
      listView,
    }
  }
</script>