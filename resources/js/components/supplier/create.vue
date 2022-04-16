

<template>



  <div class="content-body">
            <div class="container-fluid">


           
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Input Style</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-default " placeholder="input-default">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                </div>
                </div>




    </div>
    </div>



</template>



<script type="text/javascript">

  export default {
    created(){
      if (!User.loggedIn()) {
        this.$router.push({name: '/'})
      }
    },

    data(){
    return {
      form:{
        name: null,
        email: null,
        phone: null,
        shopname: null,
        address: null,
        image: null
      },
      errors:{}
    }
  },

  methods:{
    onFileSelected(event){
     let file = event.target.files[0];
     if (file.size > 1048770) {
      Notification.image_validation()
     }else{
      let reader = new FileReader();
      reader.onload = event =>{
        this.form.image = event.target.result
        console.log(event.target.result);
      };
      reader.readAsDataURL(file);
     }

    },
  supplierInsert(){
       axios.post('/api/supplier',this.form)
       .then(() => {
        this.$router.push({ name: 'supplier'})
        Notification.success()
       })
       .catch(error =>this.errors = error.response.data.errors)
     },
  }


  }

</script>


<style type="text/css">

</style>
