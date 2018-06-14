import Vue from 'vue';
 
import Example from './components/Example'
import Ajout   from './components/Ajout'
import Notes   from './components/Notes'
import Connexion from './components/Connexion'
import Sign    from './components/Sign'
 
/**
* Create a fresh Vue Application instance
*/
new Vue({
  el: '#app',
  components: {Example,Ajout,Notes,Connexion,Sign}
  
});



