<template>
  <div>
      <ContactsList endpoint="/api/contacts" />
  </div>
</template>

<script>
import ContactsList from '../components/ContactsList'
export default {
  name: 'ContactsIndex',
  components: {
    ContactsList
  }
}
</script>

<style>

</style>