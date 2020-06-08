<template>
  <div>
    <Header :username='name'></Header>
    <Body @add="add1"></Body>
    <Body @add="add2"></Body>
    <p>total : {{ totalcount }}</p>
  </div>
</template>

<script>
import Header from './components/Header.vue'
import Body from './components/Body.vue'

export default {
    data() {
        return {
            name: "kiyokiyo",
            count1: 0,
            count2: 0,
            totalcount: 0
        }
    },
  components: {
    Header,
    Body
  },
  methods: {
      add1(count) {
          this.count1 = count;
          this.totalcount = this.count1 + this.count2;
      },
      add2(count) {
          this.count2 = count;
          this.totalcount = this.count1 + this.count2;
      }
  }
}
</script>
