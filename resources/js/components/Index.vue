<template>
    <div class="wrapper">
    <!-- 
        this component will call 3 sub components
        1. list user
     -->
        <list></list>
    </div>
</template>

<script>
import List from './List';

export default {

    components: {
        List
    } 
    
}
</script>



