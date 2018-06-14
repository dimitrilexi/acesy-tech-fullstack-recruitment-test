<template>
   <div>
       <form>
   <div >
   <label for="login">username</label>: <input type="text" value="login" id="login"></br><br>
   <label for="password">password:</label> <input type="password" value="passe" id="password"></br></br>
   <input type="submit" value="connect" />
   </div>
   </form></br></br>
   <p>si vous n'etes pas encore inscrit cliquer <a href="http://localhost:8000/signup">ici</a></p>
	   
   </div>
</template>


<script>

   export default {
       name: "connexion"
   }
</script>
 
<style scoped>
 
</style>