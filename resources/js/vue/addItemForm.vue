<template>
    <div class="addItem">
        <input type="text" v-model="item.name" />
        <button
            @click="addItem()"
            :class="[item.name ? 'active' : 'inactive', 'plus']"
        >
            <font-awesome-icon :icon="['fas', 'plus']" />
        </button>
    </div>
</template>

<script>
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
export default {
    data: function () {
        return {
            item: {
                name: "",
            },
        };
    },
    components: { FontAwesomeIcon },
    methods: {
        addItem() {
            if (this.item.name == "") {
                return;
            }
            axios
                .post("api/item/store", {
                    item: this.item,
                })
                .then((response) => {
                    if (response.status == 201) {
                        this.item.name = "";
                        this.$emit("reloadlist");
                    }
                })
                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>
<style>
.addItem {
    display: flex;
    justify-content: center;
    align-items: center;
}

input {
    background: #f7f7f7;
    border: 0px;
    outline: none;
    padding: 5px;
    margin-right: 10px;
    cursor: pointer;
}
.plus {
    font-size: 20px;
}

.active {
    background-color: #00ce25;
}
.inactive {
    background-color: #999;
}
</style>
