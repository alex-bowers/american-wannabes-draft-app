<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div
                aria-describedby="modalDescription"
                aria-labelledby="modalTitle"
                class="modal"
                role="dialog"
            >
                <header
                    class="modal-header"
                    id="modalTitle"
                >
                    <slot name="header"></slot>
                    <button
                        @click="close"
                        aria-label="Close modal"
                        class="button-close"
                        type="button"
                    >
                        x
                    </button>
                </header>
                <section
                    class="modal-body"
                    id="modalDescription"
                >
                    <slot name="body"></slot>
                </section>
                <footer>
                    <slot name="footer"></slot>
                </footer>
            </div>
        </div>
    </transition>
</template>

<script>
export default {
    name: 'modal',
    methods: {
        close() {
            this.$emit('close')
        }
    }
};
</script>

<style lang="scss" scoped>
@import '../../../sass/_variables.scss';

.modal-backdrop {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background-color: rgba(0, 0, 0, 0.3);
    z-index: 3;
}

.modal {
    display: flex;
    flex-direction: column;
    background: $white;
    box-shadow: 2px 2px 20px 1px;
    height: 300px;
    overflow-x: auto;
    width: 300px;
    .modal-header,
    .modal-footer {
        display: flex;
        padding: 15px;
    }
    .modal-header {
        justify-content: space-between;
        border-bottom: 1px solid #eeeeee;
        color: #4aae9b;
    }
    .modal-footer {
        justify-content: flex-end;
        border-top: 1px solid #eeeeee;
    }
    .modal-body {
        position: relative;
        padding: 20px 10px;
    }
}

.button-close {
    background: transparent;
    border: none;
    color: #4aae9b;
    cursor: pointer;
    font-size: 20px;
    font-weight: bold;
    padding: 20px;
}

@media screen and (min-width: $breakpoint-medium) {

}
</style>
