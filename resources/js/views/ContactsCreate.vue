<template>
  <form @submit.prevent="submitForm">
    <div class="relative pb-4">
        <label for="name" class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">Contact Name</label>
        <input id="name" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400"
          placeholder="Contact Name" v-model="newContact.name">
    </div>
    <div class="relative pb-4">
        <label for="email" class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">Contact Email</label>
        <input id="email" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400"
          placeholder="Contact Email" v-model="newContact.email">
    </div>
    <div class="relative pb-4">
        <label for="company" class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">Company</label>
        <input id="company" type="text" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400"
          placeholder="Company" v-model="newContact.company">
    </div>
    <div class="relative pb-4">
        <label for="birthday" class="text-blue-500 pt-2 uppercase text-xs font-bold absolute">Birthday</label>
        <input id="birthday" type="date" class="pt-8 w-full text-gray-900 border-b pb-2 focus:outline-none focus:border-blue-400"
          placeholder="DD/MM/YYYY" v-model="newContact.birthday">
    </div>

    <div class="flex justify-end">
        <button class="py-2 px-4 rounded text-red-700 border mr-5 hover:border-red-700">Cancel</button>
        <button class="bg-blue-500 py-2 px-4 text-white rounded hover:bg-blue-400">Add New Contact</button>
    </div>
    
  </form>
</template>

<script>
export default {
    name: 'ContactsCreate',
    data() {
      return {
        newContact: {
          user_id: this.$route.params.id,
          name: '',
          email: '',
          birthday: '',
          company: ''
        }
      }
    },
    methods: {
      submitForm() {
        // console.log(this.newContact)
        axios.post('/api/contacts', this.newContact)
        .then(res => this.$router.push('/contacts/'+res.data.data.contact_id))
        .catch(err => console.log(err))
      }
    }
}
</script>

<style>

</style>