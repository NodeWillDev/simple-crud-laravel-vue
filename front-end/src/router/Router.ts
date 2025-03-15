import { createMemoryHistory, createRouter } from "vue-router";
// @ts-ignore
import App from "../App.vue";

const routes = [{ path: "/", component: App }];

const router = createRouter({
  history: createMemoryHistory(),
  routes,
});

export default router;
