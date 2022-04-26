
var rootUrl = 'http://localhost/job/job-portal-application/public/';
//all jobs call by api
$(document).ready(function () {
    function allJobs() {
        $.ajax({
            url: rootUrl+"api/all-jobs",
            type: "GET",
            async: false,
            data: {

            },
            success: function (response) {
                var i =1 
                $.each(response, function (key, value) { 
                    $('#allJobs').append(
                    '<div class="job-single mt-4">\
                        <div class="card py-2">\
                            <div class="d-flex">\
                                <h4 class="ml-2">'+ i +'.</h4>\
                                <img src="'+rootUrl+value.thumbnail+'" alt="job image" class="ml-2" srcset="" width="120">\
                                <a href="job-details/'+value.id+'/'+value.title+'"><h5 class="ml-2">'+ value.title+'</h5></a>\
                            </div>\
                            <a href="apply-job/'+value.id+'/'+value.title+'" class="btn btn-warning btn-sm text-end mt-4 ml-2" style="width: 200px">Apply Now</a>\
                        </div>\
                    </div>'
                    
                    );
                    i++
                })
            }
        })
    }
    allJobs();

     
    $('#searchId').on('click', function(){
        var keyword = $('#searchKeyword').val();
        $.ajax({
            url: rootUrl+"api/job-search",
            type: "POST", 
            data: {
                keyword:keyword
            },
            success: function (response) {
                var i =1 
                $.each(response, function (key, value) { 
                    $('#allJobs').append(
                    '<div class="job-single mt-4">\
                        <div class="card py-2">\
                            <div class="d-flex">\
                                <h4 class="ml-2">'+ i +'.</h4>\
                                <img src="'+rootUrl+value.thumbnail+'" alt="job image" class="ml-2" srcset="" width="120">\
                                <a href="job-details/'+value.id+'/'+value.title+'"><h5 class="ml-2">'+ value.title+'</h5></a>\
                            </div>\
                            <a href="apply-job/'+value.id+'/'+value.title+'" class="btn btn-warning btn-sm text-end mt-4 ml-2" style="width: 200px">Apply Now</a>\
                        </div>\
                    </div>'
                    
                    );
                    i++
                })
            }
        })
    })


  
})