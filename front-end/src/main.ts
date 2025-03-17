import { createApp } from "vue";
// @ts-ignore
import App from "./App.vue";
import router from "./router/Router";
import { library } from "@fortawesome/fontawesome-svg-core";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
import {
  faMagnifyingGlass,
  faIdBadge,
  faBook,
  faHeart,
} from "@fortawesome/free-solid-svg-icons";

library.add(faMagnifyingGlass, faIdBadge, faBook, faHeart);
const app = createApp(App);
app.use(router);
app.mount("#app");
app.component("font-awesome-icon", FontAwesomeIcon);
