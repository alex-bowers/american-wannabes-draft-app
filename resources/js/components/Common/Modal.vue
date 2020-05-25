<template>
    <transition name="modal-fade">
        <div class="modal-backdrop">
            <div class="modal"
                 role="dialog"
                 aria-labelledby="modalTitle"
                 aria-describedby="modalDescription">
                <header class="modal-header"
                        id="modalTitle">
                    <slot name="header"></slot>
                    <button type="button"
                            class="btn-close"
                            @click="close"
                            aria-label="Close modal">
                        x
                    </button>
                </header>
                <section class="modal-body"
                         id="modalDescription">
                    <slot name="body"></slot>
                </section>
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

<style>
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
}

.modal {
    display: flex;
    flex-direction: column;
    background: #ffffff;
    box-shadow: 2px 2px 20px 1px;
    overflow-x: auto;
}

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

.btn-close {
    border: none;
    font-size: 20px;
    padding: 20px;
    cursor: pointer;
    font-weight: bold;
    color: #4aae9b;
    background: transparent;
}

.btn-green {
    color: white;
    background: #4aae9b;
    border: 1px solid #4aae9b;
    border-radius: 2px;
}
</style>
