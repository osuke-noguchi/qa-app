<template>
    <div class="card">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#write">Write</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#preview">Preview</a>
                </li>
            </ul>
        </div>
        <div class="card-body tab-content">
            <div class="tab-pane active" id="write">
                <slot></slot>
            </div>
            <div class="tab-pane active" v-html="preview" id="preview"></div>
        </div>
    </div>
</template>

<script>
import MarkDownIn from 'markdown-it';
const md = new MarkDownIn();

export default {
    props: ['body'],

    computed: {
        preview () {
            return md.render(this.body);
        }
    }
}
</script>