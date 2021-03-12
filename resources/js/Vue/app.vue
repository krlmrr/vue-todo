<template>
  <div>
      <h1>Hello!</h1>
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