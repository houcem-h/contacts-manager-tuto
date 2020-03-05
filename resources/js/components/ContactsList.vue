<template>
  <div>
      <div v-if="loading">
        <img style="-webkit-user-select: none;margin: auto;" src="https://thumbs.gfycat.com/LoneDetailedFairybluebird-max-1mb.gif">
      </div>
      <div v-else>
        <div v-for="contact in contacts" :key="contact.contact_id">
          <router-link :to="'/contacts/' + contact.contact_id" class="flex items-center border-b border-gray-400 p-4 hover:bg-gray-100">
            <UserCircle :name="contact.name" />
            <div class="pl-4">
                <p class="text-blue-400 font-bold">{{ contact.name }}</p>
                <p class="text-gray-600">{{ contact.company }}</p>
            </div>
          </router-link>
        </div>
      </div>
  </div>
</template>

<script>
export default {
    name: 'ContactsList',
    data() {
      return {
          loading: true,
          contacts: null
      }
  },
  mounted() {
    axios.get('/api/contacts')
    .then(res => {
      this.loading =  false;
      this.contacts = res.data.data
      
    })
    .catch(err => {
      this.loading = false;
      alert('Unable to fetch contacts')
    })
  }
}
</script>

<style>

</style>