@extends('layouts.master')
@section('content')

<div class="container-fluid bg-primary py-3 bg-header" style="margin-bottom: 30px;">
    <div class="py-5 container">
        <div class="pt-5 ">
            <h1 class="text-center text-white animated zoomIn"> Post Details</h1>              
        </div>
        <div class="text-center" >
            <a href="{{route('home')}}"> <span style="color: #fff">Home</span> </a> <span><i class="fa fa-arrow-right px-3" style="color: #fff"></i></span>  <span style="color: #fff">Post Details</span> 
        </div>
    </div>
</div>
    <!-- Blog Start -->
    <div class="container-fluid pt-5 wow fadeInUp" data-wow-delay="0.1s" id="vue_app">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-8">
                    <!-- Blog Detail Start -->
                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded mb-2" :src="post.image" alt="">
                        <div class="d-flex mb-3">
                            <small class="me-3"><i class="far fa-user text-primary me-2"></i><span v-text="post.author"></span></small>
                            <small><i class="far fa-calendar-alt text-primary me-2"></i><span v-text="post.post_date"></span></small>
                        </div>
                        <div>
                            <a href="#" class="badge bg-primary me-2" v-for="item in post.tags" :key="item.id" v-text="item.name"></a>
                        </div>
                        <h1 class="mb-4" v-text="post.title" style="text-align: justify"></h1>
                        <div v-html="post.description" style="text-align: justify"></div>

                       
                    </div>
                    <!-- Blog Detail End -->
    
                
                </div>
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">                     
                     <!-- Recent blog Start -->
                     <div class="mb-5 wow slideInUp" data-wow-delay="0.1s" id="newData">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Recent blog</h3>
                        </div>                         
                        <div class="d-flex rounded overflow-hidden mb-3" v-for="item in recentPostData" :key="item.id">
                            <img class="img-fluid" :src="item.image" style="width: 100px; height: 100px; object-fit: cover;" alt="">     
                                <div class="bg-light py-3" style="height: 100px; width:100%">
                                    <a :href="'/post_details/' + item.id" class="recent-post-title" v-text="item.title" >
                                    </a>
                                </div>
                        </div>                     
                        
                    </div>
                    <!-- Recent blog End -->
    
                    <!-- Image Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <img src="/images/diu.jpeg" alt="" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->   
                
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->

  @endsection

  @section('script')   
  <script type="text/javascript">
      $(document).ready(function() {
          var vue = new Vue({
              el: '#vue_app',
              data: {
                  config: {
                      base_path: "{{ env('API_URL') }}",
                  },
                  id:"{{ $id }}",
                  items: [],
                  post:'',
                  recentPostData:"",
              },

              methods: {           
               
                fetchData() {           
                      axios.get(`${this.config.base_path}/public-diu-blog/post-details/${this.id}`).then((
                          response) => {
                          this.post = response.data;
                          console.log(this.post);
                      }).catch((error) => {
                          toastr.error("Something went to wrong");
                      });
                  },
          
                  fetchRecentPost() {             
                
                axios.get(`${this.config.base_path}/public-diu-blog/recent-post`).then((
                    response) => {
                    this.recentPostData = response.data;
                  

                }).catch((error) => {
                    toastr.error("Something went to wrong");
                });
            },

                  



              },

              created() {
                  this.fetchData();
                  this.fetchRecentPost();
              },

          });

      });
  </script>
@endsection