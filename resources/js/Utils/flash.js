import { notify, useNotification } from "@kyvg/vue3-notification";
import { usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";

const showFlashNotifications = () => {
    const { notify } = useNotification();
    const page = usePage();

    onMounted(() => {
        const { success } = page.props.flash;
        if (success) {
            notify({
                title: "Action Successful!",
                text: success,
                type: "success",
            });
        }
    });
};

const showFlashNotification = (title, text, type) => {
    notify({ title, text, type });
};

export { showFlashNotifications, showFlashNotification };
