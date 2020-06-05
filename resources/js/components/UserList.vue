<template>
  <div>
    <div>
      <h1 class="text-center my-8 text-2xl text-main-orange uppercase">List of Users</h1>
    </div>
    <div class="flex flex-wrap max-w-6xl m-auto" v-if="users">
      <div
        class="flex flex-col flex-wrap w-full md:w-1/2 p-2"
        v-for="user in users"
        v-bind:key="user.id"
      >
        <div class="flex bg-white w-lg shadow shadow-lg">
          <div v-if="user.image">
            <img class="object-full h-36 w-36 object-cover" v-bind:src="'storage/' + user.image" />
          </div>
          <div v-else>
            <img class="object-full h-36 w-36" src="img/avatar-placeholder.png" />
          </div>
          <div class="p-4 pt-6 flex flex-col items-start">
            <h3 class="text-main-orange text-lg md:text-md font-semibold">{{ user.name}}</h3>
            <p class="text-gray-700">
              <i class="far fa-envelope"></i>
              {{ user.email}}
            </p>
            <div class="text-gray-700">
              <i class="far fa-clock"></i>
              Registered since {{ format_date(user.created_at) }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
import axios from "axios";
export default {
  data() {
    return {
      users: {}
    };
  },
  mounted() {
    this.loadUsers();
  },
  methods: {
    format_date(value) {
      if (value) {
        return moment(String(value)).format("D MMMM YYYY");
      }
    },
    loadUsers() {
      axios
        .get("/api/users")
        .then(response => {
          this.users = response.data;
        })
        .catch(error => console.log(error));
    }
  }
};
</script>