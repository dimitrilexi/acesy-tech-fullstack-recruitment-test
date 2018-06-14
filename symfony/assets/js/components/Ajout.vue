<template>
   <div>
 <form >
  
  <textarea id="text" rows="10" cols="50" name="note" >
entrer des notes ici
</textarea></br></br>
<button type="button" onclick="alert(getElementById('text').value">ajouter</button>
  </form>
  </br>
  
   </div>
</template>


<script  type="text/javascript">
   export default {
       name: "ajout"
   }
   
 function rediriger(){
   
   document.location.href="http://localhost:8000/notes";
   }
   
</script>
 
<style scoped>
 
</style>