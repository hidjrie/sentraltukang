<template>
  <div v-if="users.data">
    <div class="bg-blue-500 flex flex-wrap max-w-5xl m-auto">
      <div
        class="flex items-start bg-white shadow-md mb-4 h-36 w-1/2 max-w-md m-auto mt-5"
        v-for="user in users.data"
        v-bind:key="user.id"
      >
        <div>
          <img class="object-cover h-36 w-36" src="img/sentraltukang-front.jpg" />
        </div>
        <div class="p-4">
          <h3
            class="text-main-orange text-lg md:text-md font-semibold hover:text-blue-800"
          >{{ user.name}}</h3>
          <p>{{ user.email}}</p>
          <div class="text-gray-600 text-sm">
            <i class="far fa-clock"></i>
            Registered since {{ format_date(user.created_at) }}
          </div>
        </div>
      </div>

      <div v-if="users.next_page_url" class="card-footer">
        <button
          @click.prevent="loadUsers(users.next_page_url)"
          type="button"
          class="loadmore-btn px-1 py-1 text-sm uppercase text-main-orange bg-transpatent border border-main-orange hover:bg-main-orange hover:text-white"
        >
          <i class="fas fa-arrow-down"></i> Load More
        </button>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";
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
    loadUsers(url = "") {
      axios
        .get(url ? url : "/api/users")
        .then(response => {
          if (!this.users.data) {
            this.users = response.data;
          } else {
            this.users.data.push(...response.data.data);
            this.users.next_page_url = response.data.next_page_url;
          }
        })
        .catch(error => console.log(error));
    }
  }
};
</script>