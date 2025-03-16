<script setup>
import { HouseWifi } from 'lucide-vue-next';
import Alert from '@/components/flowbite/Alert.vue';
import Card from '@/components/flowbite/Card.vue';
import ThePanel from '@/components/base/icons/ThePanel.vue';
</script>

<template>
  <Master>
    <p class="text-primary-100 mb-3">
      <HouseWifi color="green" />
    </p>
    <Alert />
    <Card />

    <ThePanel>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores nesciunt esse, tempora deserunt, commodi natus
        necessitatibus incidunt in praesentium rerum ab exercitationem nisi animi, cum sed nam velit quia id.</p>
    </ThePanel>


  </Master>
</template>
