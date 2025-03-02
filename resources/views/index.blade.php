@extends('layouts.master')
@section('content')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5" id="vue_app">
            <div class="row g-5">
                <!-- blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s" v-for="item in items.data" :key="item.id">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" :src="item.image" alt="">
                                    
                                </div>
                                <div class="p-4">
                                    <div class="d-flex mb-3">
                                        <small class="me-3"><i class="far fa-user text-primary me-2"></i><span v-text="item.author"></span></small>
                                        <small><i class="far fa-calendar-alt text-primary me-2"></i><span v-text="item.post_date"></span></small>
                                    </div>
                                    <h4 class="mb-3 post-title" v-text="item.title"></h4>
                                    
                                    <div class="post-desc" v-html="item.description"></div>
                                    <a class="text-uppercase" :href="'post_details/'+item.id">Read More <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12" v-if="this.last_page >1">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12">
                                    Showing <span v-html="this.items.meta.from ?? 0"></span> to <span v-html="this.items.meta.to ?? 0"></span>
                                    of
                                    <span v-html="this.items.meta.total"></span> entries
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-12">
                                    <nav aria-label="Page navigation example" class="my-3 mx-2 ">
                                        <ul class="pagination pagination-sm justify-content-end">
                                            <li class="page-item" :class="this.current_page > 1 ? '' : 'disabled'">
                                                <a class="page-link" href="javaScript:void(0)" @click="paginatePreview"
                                                    aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item" v-for="(row,index) in this.last_page" :key="index"
                                                :class="row == this.current_page ? 'active' : ''">
                                                <a class="page-link" href="javaScript:void(0)" @click="paginatePageWise(row)"
                                                    v-text="row"></a>
                                            </li>
                                            <li class="page-item" :class="this.last_page > this.current_page ? '' : 'disabled'">
                                                <a class="page-link" href="javaScript:void(0)" @click="paginateNext" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>                  
                  
                    
                      
                       
                    </div>
                </div>
                <!-- blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Keyword" v-model="search">
                            <button class="btn btn-primary px-4" @click="searchItem"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Categories</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                                <a v-for="item in categoryData" :key="item.id" class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="#"><i class="bi bi-arrow-right me-2"></i><span v-text="item.name" @click="searchCategory(item.id)"></span></a>

                                                         
                           
                           
                    
                        </div>
                    </div>
                    <!-- Category End -->
    
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
                        <img src="/images/diu.jpeg" alt="diu Image" class="img-fluid rounded">
                    </div>
                    <!-- Image End -->
    
                    <!-- Tags Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Tag Cloud</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <a v-for="item in tagData" :key="item.id" href="#" class="btn btn-light m-1" @click="searchTag(item.id)"> <span v-text='item.name'></span></a>
                        </div>
                    </div>
                    <!-- Tags End -->
    
                    <!-- Plain Text Start -->
                    {{-- <div class="wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Plain Text</h3>
                        </div>
                        <div class="bg-light text-center" style="padding: 30px;">
                            <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea ut tempor magna takimata, amet sit et diam dolor ipsum amet diam</p>
                            <a href="" class="btn btn-primary py-2 px-4">Read More</a>
                        </div>
                    </div> --}}
                    <!-- Plain Text End -->
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- blog End -->


  {{-- <x-vendor></x-vendor> --}}



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
                    items: [],
                    current_page: '',
                    last_page: '',
                    search: "",
                    category: "",
                    tag:"",
                    categoryData:"",
                    tagData:"",
                    recentPostData:"",
                },

                methods: {

                    fetchData(page = 1 ) {
                        let item = this.search || 0;
                        let category = this.category || 0;
                        let tag = this.tag || 0;
                        const data = {
                            item: item,
                            category: category,
                            tag: tag,
                        };
                      
                        axios.post(`${this.config.base_path}/public-diu-blog/get-post?page=${page}`,data).then((
                            response) => {
                            // console.log(response.data);
                            this.items = response.data;
                            this.current_page = response.data.meta.current_page;
                            this.last_page = response.data.meta.last_page;

                        }).catch((error) => {
                            toastr.error("Something went to wrong");
                        });
                    },
                    searchItem(){
                        // this.search = id;
                        // alert(this.search);
                        this.fetchData();
                    },


                    searchCategory(id){
                        this.category = id;
                        this.fetchData();
                    },
                    searchTag(id){
                        this.tag = id;
                        this.fetchData();
                    },
                
                    paginatePreview() {
                        let page_number = parseInt(this.current_page - 1);
                        this.fetchData(page_number);
                    },

                    paginateNext() {
                        let page_number = parseInt(this.current_page + 1);
                        this.fetchData(page_number);

                    },

                    paginatePageWise(page) {
                        this.fetchData(page);
                    },

                    fetchCategory() {           
                        axios.get(`${this.config.base_path}/public-diu-blog/category`).then((
                            response) => {
                            this.categoryData = response.data;  
                        }).catch((error) => {
                            toastr.error("Something went to wrong");
                        });
                    },
                    fetchTag() {           
                        axios.get(`${this.config.base_path}/public-diu-blog/tag`).then((
                            response) => {
                            this.tagData = response.data;  
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
                    this.fetchCategory();
                    this.fetchTag();
                    this.fetchRecentPost();
                },

            });

        });
    </script>
@endsection
    

