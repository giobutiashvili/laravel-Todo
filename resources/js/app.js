import "./bootstrap";
import { createApp } from "vue";
import app from "./vue/app.vue";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";

library.add(fas);
createApp(app).mount("#app");
