<template>
    <panel-item :field="field">
        <icon
            v-if="field.value"
            slot="value"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            type="check-circle"
            :class="classes"
        />
        <icon
            v-else
            slot="value"
            viewBox="0 0 24 24"
            width="24"
            height="24"
            type="x-circle"
            :class="classes"
        />
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        label() {
            return this.field.value == true ? this.__('Yes') : this.__('No')
        },
        classes() {
            const className = this.field.options['class'] || '';
            if (this.field.value == true) {
                return 'text-success ' + className;
            } else {
                return 'text-danger ' + className;
            }
        },

    },
}
</script>
