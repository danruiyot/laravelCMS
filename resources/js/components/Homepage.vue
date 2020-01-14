<template>
      <div>
        <nav>
          <section>
            <a class="text-center"  href="/">HOME</a>
            <hr>
            <ul>
               <li>
            <a href="/admin/dashboard">DASHBOARD</a>

               </li>
               <li>
                 <router-link :to="{ name: 'create', params: { userId } }">
                   NEW POST
                 </router-link>
               </li>
            </ul>
          </section>
        </nav>
        <article>
          <header>
            <div class="navbar navbar-expand-sm navbar-light bg-light">
              <a class="navbar-brand" href="#">#cms</a>
              <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                  aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link" href="#">Welcome, {{ userName }}</a>
                  </li>
                 
                </ul>
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link" @click="logout"  style="cursor: pointer">Logout</a>
                    </li>
                </ul>
              </div>
            </div>
          </header>
          <br>
          <div> 
            <router-view></router-view> 
          </div>
        </article>
      </div>
    </template>
    <script>
    export default {
      props: {
        userId: {
          type: Number,
          required: true
        },
        userName: {
          type: String,
          required: true
        }
      },
      data() {
        return {};
      },
      methods: {
        logout() {
          axios.post("/logout").then(() => {
            window.location = "/";
          });
        }
      }
    };
    </script>