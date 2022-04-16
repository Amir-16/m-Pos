<template>
  <div>
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- start modal -->
              <!-- Large modal -->
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target=".bd-example-modal-lg"
              >
                Add Supplier
              </button>

              <div
                class="modal fade bd-example-modal-lg"
                tabindex="-1"
                role="dialog"
                aria-labelledby="myLargeModalLabel"
                aria-hidden="true"
              >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> Add Supplier</h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">


                    </div>
                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-secondary"
                        data-dismiss="modal"
                      >
                        Close
                      </button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    ...
                  </div>
                </div>
              </div>

              <!-- end modal -->
            </ol>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <br />
    <input
      type="text"
      v-model="searchTerm"
      class="form-control"
      style="width: 300px"
      placeholder="Search Here"
    />

    <br />

    <div class="row">
      <div class="col-lg-12 mb-4">
        <!-- Simple Tables -->
        <div class="card">
          <div
            class="card-header py-3 d-flex flex-row align-items-center justify-content-between"
          >
            <h6 class="m-0 font-weight-bold text-primary">Supplier List</h6>
          </div>
          <div class="table-responsive">
            <table class="table align-items-center table-flush">
              <thead class="thead-light">
                <tr>
                  <th>Name</th>
                  <th>image</th>
                  <th>Phone</th>
                  <th>Shop Name</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="supplier in filtersearch" :key="supplier.id">
                  <td>{{ supplier.name }}</td>
                  <td><img :src="supplier.image" id="em_image" /></td>
                  <td>{{ supplier.phone }}</td>
                  <td>{{ supplier.shopname }}</td>
                  <td>{{ supplier.email }}</td>
                  <td>
                    <router-link
                      :to="{ name: 'edit-supplier', params: { id: supplier.id } }"
                      class="btn btn-sm btn-primary"
                      >Edit</router-link
                    >

                    <a @click="deleteSupplier(supplier.id)" class="btn btn-sm btn-danger"
                      ><font color="#ffffff">Delete</font></a
                    >
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>
      </div>
    </div>
    <!--Row-->
  </div>
</template>

<script type="text/javascript">
export default {
  created() {
    if (!User.loggedIn()) {
      this.$router.push({ name: "/" });
    }
  },
  data() {
    return {
      suppliers: [],
      searchTerm: "",
    };
  },
  computed: {
    filtersearch() {
      return this.suppliers.filter((supplier) => {
        return supplier.name.match(this.searchTerm);
      });
    },
  },

  methods: {
    allSupplier() {
      axios
        .get("/api/supplier/")
        .then(({ data }) => (this.suppliers = data))
        .catch();
    },
    deleteSupplier(id) {
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.value) {
          axios
            .delete("/api/supplier/" + id)
            .then(() => {
              this.suppliers = this.suppliers.filter((supplier) => {
                return supplier.id != id;
              });
            })
            .catch(() => {
              this.$router.push({ name: "supplier" });
            });
          Swal.fire("Deleted!", "Your file has been deleted.", "success");
        }
      });
    },
  },
  created() {
    this.allSupplier();
  },
};
</script>

<style type="text/css">
#em_image {
  height: 40px;
  width: 40px;
}
</style>
