@extends('backend.layouts.app')

@section('title', __('User Management'))

@section('breadcrumb-links')
    @include('backend.auth.user.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('User Management')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.auth.user.create')"
                    :text="__('Create User')"
                />
            </x-slot>
        @endif

        <x-slot name="body">
            <form class="form-horizontal" id="user_filter_form">
                <div class="form-group row">
                        <div class="col-md-2">
                            <input type="text" name="filter_name" id="filter_name" class="form-control" placeholder="Name" value="" >
                        </div>
                        <div class="col-md-2">
                            <input type="text" name="filter_email" id="filter_email" class="form-control" placeholder="Email" value="" >
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="from_date" id="from_date" placeholder="From Registration Date" data-provide="datepicker">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="to_date" id="to_date" placeholder="To Registration Date" data-provide="datepicker">
                        </div>
                        <div class="col-md-2">
                            <button type="button"  class="btn  btn-primary float-left filter_action" id="user_filter" >Filter</button>
                        </div>
                        
                    </div>
            </form>

            <table id="usersdt" class="table table-responsive-sm table-striped">
                <thead>
                    <tr>
                        <th>Created At</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Verified</th>
                        <th>Approved</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>

        </x-slot>
    </x-backend.card>
@endsection
@push('after-scripts')
<script type="text/javascript">// Data Table JavaScripts
let AdminusersManager = (function(w,req,$){

    let $AdminusersObj = {};
    var dlt_id = '';
    var crurl = "{{url()->current()}}"; 

    $AdminusersObj.reload_page_func = function (e) {
        var url = $(location).attr("href");
        var url = url.replace("#", "");
        var href = url;
        $.ajax({
            url:url,
            type:'GET',
            beforeSend:function(){
                $('body').addClass('card-refresh refresh-before');
            },
            success:function(data){ 

                var itemid = $(".menu-active").children('.menu_class').attr('id');
                var pageTitle = $(".menu-active").children('.menu_class').attr('pageTitle');

                if(itemid == undefined)
                {
                    var itemid = $(".open").children('.menu_class').attr('id');
                    var pageTitle = $(".open").children('.menu_class').attr('pageTitle');
                }
                document.title = pageTitle;
                
                $(".menu_class").parent().removeClass('menu-active');
                $(".nav-item").removeClass('activeopen');
                $(".nav-item").removeClass('open');

                if(itemid == 'leadsData' || itemid == 'leadsData' || itemid == 'leadsData')
                {
                    $("#"+itemid).parent().addClass('activeopen');
                    $("#"+itemid).parent().children('.dropdown-menu').slideDown(200, function() {
                        $("#"+itemid).parent().addClass("open");
                    });
                }
                else if(itemid == 'removedleadsData')
                {
                    $("#"+itemid).closest('.nav-item').addClass('open');
                    $("#"+itemid).parent().addClass('menu-active');
                }
                else if(itemid == 'usersDashboardData')
                {
                    $("#"+itemid).parent().addClass('activeopen');
                    $("#"+itemid).parent().children('.dropdown-menu').slideDown(200, function() {
                        $("#"+itemid).parent().addClass("open");
                    });
                }
                else if(itemid == 'usersData')
                {
                    $("#"+itemid).closest('.nav-item').addClass('open');
                    $("#"+itemid).parent().addClass('menu-active');
                }
                else
                {
                    $("#"+itemid).parent().addClass('menu-active');
                }
                
                document.title = pageTitle;
                $("#final_main_content").html(data);
                window.history.pushState({"pageTitle":pageTitle,"pageUrl":href,"itemid":itemid},"", href);
            },
            complete:function(){
                $('body').removeClass('card-refresh refresh-before');
            }   
        });
    }

    $AdminusersObj.reload_events = function(){
        let local = this;

        //$.fn.DataTable.ext.pager.numbers_length = 3;

        $('.edit_modal_trigger').unbind().on('click',function(){
            var url = $(this).data('target');
            $.ajax({
                 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:url,
                type:'GET',
                beforeSend:function(){
                    
                },
                success:function(response){  
                   $('#modal-section-pan').html(response);
                   $('#UserdetailsModal').modal('show');  
                   local.reload_events();
                   local.dtCheckboxesCheck();
                  
                },
                complete:function(){  
                  
                }   
              });
        });

        // manage filter actions
        $('.filter_action').unbind().on('click', function (e) {
            e.preventDefault();
            var clicked_item = $(this).attr('id');
            
            if(clicked_item == 'user_filter')
            {
                ls_table1.draw();
            }
            else if(clicked_item == 'user_filter_reset')
            {
                $('#user_filter_form').reset();
                ls_table1.draw();
            }
        });

        $('.view_modal_trigger').unbind().on('click',function(){
            var user_id = $(this).attr('data-user');   
        
            if(user_id!=''&& user_id!=null && user_id!=undefined)
            {
                    var url = site_url + '/userleads?user='+user_id;
            }
            else
            {
                    var url = site_url + '/userleads?user=0';
            }
            $('.modal').modal('hide');
            $.ajax({
                url:url,
                type:'GET',
                beforeSend:function(){
                    $('body').addClass('card-refresh refresh-before');
                },
                success:function(data){ 
                    var itemid = 'leadsData';
                    $(".menu_class").parent().removeClass('menu-active');
                    $(".nav-item").removeClass('activeopen');
                    $('.nav-item').removeClass('open');

                    if(itemid == 'leadsData' || itemid == 'leadsData' || itemid == 'leadsData')
                    {
                        $("#"+itemid).parent().addClass('activeopen');
                        $("#"+itemid).parent().children('.dropdown-menu').slideDown(200, function() {
                            $("#"+itemid).parent().addClass("open");
                        });
                    }
                    else if(itemid == 'removedleadsData')
                    {
                        $("#"+itemid).closest('.nav-item').addClass('open');
                        $("#"+itemid).parent().addClass('menu-active');
                    }
                    else if(itemid == 'usersDashboardData')
                    {
                        $("#"+itemid).parent().addClass('activeopen');
                        $("#"+itemid).parent().children('.dropdown-menu').slideDown(200, function() {
                            $("#"+itemid).parent().addClass("open");
                        });
                    }
                    else if(itemid == 'usersData')
                    {
                        $("#"+itemid).closest('.nav-item').addClass('open');
                        $("#"+itemid).parent().addClass('menu-active');
                    }
                    else
                    {
                        $("#"+itemid).parent().addClass('menu-active');
                    }

                    var title = 'Lead List - User Leads';
                    document.title = title;
                    $("#final_main_content").load(url);
                    window.history.pushState({"pageTitle":title,"pageUrl":url,"itemid":itemid},"", url);
                },
                complete:function(){
                    $('body').removeClass('card-refresh refresh-before');
                }   
            });
        });

        $('#editButton').unbind().on('click',function(){
            var className = "edit-show";
            $('.edit-hidden').removeClass('edit-hidden').addClass(className);
            var className1 = "label-hidden";
            $('.label-show').removeClass().addClass(className1);
            //code for enter key
            $('#status').focus();
            
            $("#UserdetailsModal_content").unbind().on('keypress',function(event){
                var keyCode = event.keyCode || event.which;
                if( keyCode === 13) {
                    $('#edit-user-details').trigger('click');
                }
            });
        });

        $('.edit-user-form').submit(function(e) {    
            e.preventDefault();             
            if(!$(this).parsley().validate()) {
                return false;
            }
            $('#edit-user-details').css('pointer-events','none');
            var formdata = $(this).serialize();
            var url = $(this).attr('action');
            $.ajax({
                headers: { 
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                },
                url: url,
                type: "PUT",
                data: formdata,
                beforeSend:function(){
                    $('.modal-body').addClass('card-refresh refresh-before');
                },
                success: function (response) {
                    $('.modal').modal('hide');
                    $.toaster({ priority : response.status, title : response.title, message : response.message });
                },
                complete: function () {
                    $('.modal-body').removeClass('card-refresh refresh-before');
                    local.reload_page_func();
                }
            });
        });


        // $("#sortable").sortable({
        //     axis: "y",
        //     containment: "parent"
        // });
        // $("#sortable").disableSelection();
        $('.user_dashboard_trigger').unbind().on('click',function(){
            var user_id = $(this).attr('data-dash');   
        
            if(user_id!=''&& user_id!=null && user_id!=undefined)
            {
                var url = site_url + '/userdashboard';
                var loginurl = site_url + '/userlogin/';
                $.ajax({
                url:url,
                type:'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { user_id:user_id},
                beforeSend:function(){
                $('body').addClass('card-refresh refresh-before');
                },
                success:function(data){ 
                   if(data.status=='success' && data.token!=''){
                        window.open(loginurl+data.token,
                        '_self');
                    }else{
                        $.toaster({ priority : data.status, title : data.title, message : data.message });
                   }
                },
                complete:function(){
                $('body').removeClass('card-refresh refresh-before');
                }   
                });
            }
        });
        
    }

    $AdminusersObj.dtCheckboxesCheck = function () {
        // manage show hide of action buttons
        var is_checked = false;
        $(".dt_checkbox").each(function() {  
            if($(this).prop("checked") == true)
            {
                is_checked = true;
            }
        });
        if(is_checked == true)
        {
            $(".actions-top").show();
            $(".chkAll").prop('checked', true);
            $('.defaultHide').show();
            $('.defaultShow').hide();
        }
        else
        {
            $(".selectedRow").text('0 Selected');
            $(".actions-top").hide();
            $(".chkAll").prop('checked', false);
            $('.defaultHide').hide();
            $('.defaultShow').show();
        }
    }

    $AdminusersObj.events = function(){
        let local = this;
        //$.fn.DataTable.ext.pager.numbers_length = 3;
        $(".dt_checkbox").prop('checked', false);
        $(".selectedRow").text('0 Selected');
        $(".actions-top").hide();
        $(".chkAll").prop('checked', false);
        $('.defaultHide').hide();
        $('.defaultShow').show();           

        
        $('body').off('click', '.dt_checkbox').on('click', '.dt_checkbox', function (e) {
            var count = $('.dt_checkbox').filter(':checked').length;
            $(".selectedRow").text(count+' Selected');
            if($("#select_type").val() == "select_all")
            {
                $("#select_type").val("");
                $(".chkAll").prop('checked', false);
                $('.defaultHide').hide();
                $('.defaultShow').show();
            }

            // manage show hide of action buttons
            var is_checked = false;
            $(".dt_checkbox").each(function() {  
                if($(this).prop("checked") == true)
                {
                    is_checked = true;
                }
            });
            if(is_checked == true)
            {
                $(".chkAll").prop('checked', true);
                $(".actions-top").show();
                $('.defaultShow').hide();
                $('.defaultHide').show();
            }
            else
            {
                $(".chkAll").prop('checked', false);
                $(".actions-top").hide();
                $('.defaultHide').hide();
                $('.defaultShow').show();
                
            }
        });         
    }

    $AdminusersObj.loadTables = function(){
        var local = this;  
        ls_table1 = local.callDatatable('usersdt','new');

        local.reload_events();
    }
    $AdminusersObj.callDatatable = function(id){
        var local = this;       
        var selectVar  = 'All';
        $('#'+id).on( 'draw.dt', function () {
            local.reload_events();
        } );
        
        var oTable = $('#'+id).DataTable({
                processing: true,
                serverSide: true,
                "pageLength": 25,
                order:[1,'asc'],
                "dom": '<"mDatatable"l<"selectedRow"><"actionTopMenuRow"><"showhideRow">pir<"h-scroll"t>>',
                "language": {
                    paginate: {
                        next: '<i class="fa fa-chevron-right">',
                        previous: '<i class="fa fa-chevron-left">'  
                    },
                    "lengthMenu": "_MENU_",
                    "info": "_START_ - _END_ of _TOTAL_",
                },
                lengthMenu: [25,50,100],
                ajax: {
                url: "{{route('admin.auth.user.usersdtindex')}}",
                data: function (d) {
                    d.created_at = $('#filter_created_at').val(),
                    d.name = $('#filter_name').val(),
                    d.email = $('#filter_email').val(),
                    d.from_date = $('#from_date').val(),
                    d.to_date = $('#to_date').val(),
                    d.crurl = crurl
                },
                },
                preDrawCallback:function(){
                    
                },
                drawCallback:function(){
                    $('body').removeClass('card-refresh refresh-before');
                },
                success:function (response) {
                    
                },
                columns: [
                    { data: 'created_at'  },
                    { data: 'name' },
                    { data: 'email' },
                    { data: 'email_verified_at' },
                    { data: 'approved', searchable:false ,sortable:false},
                    { data: 'action', searchable:false ,sortable:false},
                ],
                "columnDefs": [ {
                    "targets": 'no-sort',
                    "orderable": false,
                }]
        });

        

        $("div.actionTopMenuRow").html(``);
        $("div.actionTopMenuRow").append(`<div class="actions-top" style="display:none;">
            <div class="inline-block">
                <button class="btn btn-default btn-sm bulk_actions" id="export_users">
                    <i class="fa fa-cloud-download"></i>
                    <span>Export </span>
                </button>
            </div>
            <div class="inline-block">
                <button class="btn btn-default btn-sm bulk_actions" id="deactivate_user">
                    <i class="fa fa-times-circle-o"></i>
                    <span>Deactivate </span>
                </button>
            </div>
            <div class="inline-block">
                <button class="btn btn-default btn-sm bulk_actions" data-target="#deleteModaltest" data-toggle="modal" id="bulk_delete">
                    <i class="fa fa-trash"></i>
                    <span>Delete </span>
                </button>
            </div>
            
        </div>`);

        var showhideModalUrl = $("#showhideModalUserUrl").val();
        $("div.showhideRow").html('<span title="Show/Hide Columns" class="showhide-btn-user pull-right" data-toggle="modal" data-target="'+showhideModalUrl+'"><i class="fa fa-cog font-size-22"></i> <i class="fa fa-angle-down font-size-16"></i></span>');   

        $('body').off('click', '.showhide-btn-user').on('click', '.showhide-btn-user', function (e) {
            var url = $(this).data('target');
            $.ajax({
                 headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url:url,
                type:'GET',
                beforeSend:function(){
                    
                },
                success:function(response){  
                   $('#modal-section-pan').html(response);
                   $( "#showhideModalUser" ).unbind().on('shown.bs.modal', function(){
                        $('#txt_user_name').focus();
                        $("#showhideModalUser_content").unbind().on('keypress',function(event){
                            var keyCode = event.keyCode || event.which;
                            if( keyCode === 13) {

                                $('#save_columns_user').trigger('click');
                            }
                        });
                    });
                   $('#showhideModalUser').modal('show'); 
                   local.reload_events(); 
                },
                complete: function(){
                    
                }   
              });
        });

        $('body').off('click', '#select_all_dt').on('click', '#select_all_dt', function (e) {
            $("#select_type").val("select_all");
            $(".dt_checkbox").prop('checked', true);
            $(".selectedRow").text($("#rows_count").val()+' Selected');
            $(".actions-top").show();
            $('.defaultHide').show();
            $('.defaultShow').hide();
            $(".chkAll").prop('checked', true);
            selectVar = 'All';
        });

        $('body').off('click', '#select_visible_dt').on('click', '#select_visible_dt', function (e) {
            $("#select_type").val("");
            $(".dt_checkbox").prop('checked', true);
            var count = oTable.rows( { selected: true } ).count();
            $(".selectedRow").text(count+' Selected');
            $(".actions-top").show();
            $('.defaultHide').show();
            $('.defaultShow').hide();
            $(".chkAll").prop('checked', true);
            selectVar = 'Visible';
        });

        $('body').off('click', '#chkAll').on('click', '#chkAll', function (e) {
            $("#select_type").val("");
            $(".dt_checkbox").prop('checked', false);
            $(".selectedRow").text(0+' Selected');
            $(".actions-top").hide();
            $('.defaultHide').hide();
            $('.defaultShow').show();
            $(".chkAll").prop('checked', false);
        });
        
        $('#SearchTextField').keyup(function () {
           oTable.search($(this).val()).draw();
          
        });

        $('body').off('click', '.single_actions').on('click', '.single_actions', function (e) {
            e.preventDefault();
            $('#'+$(this).attr('id')).prop("disabled", true);
            var user_id = $(this).attr('id');
            var status = $(this).attr('data-value');
            var action = 'activate_deactivate_user';
            if(user_id == 0 || user_id == '')  
            {  
                alert("Please select atleast one record.");
                $('#'+$(this).attr('id')).prop("disabled", false);
            }
            else
            { 
                var url1 = users_do_action;
                $.ajax({
                    url: url1,
                    type: 'POST',
                    beforeSend:function(){
                        $('.modal-body').addClass('card-refresh refresh-before');
                    },
                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                    data: { ids : user_id, action : action, status : status},
                    beforeSend:function(){
                        $('body').addClass('card-refresh refresh-before');
                    },
                    success:function(response){                     
                        if(response.status == 'success')
                        {
                            $('.modal').modal('hide');
                        }                   
                        $.toaster({ priority : response.status, title : response.title, message : response.message });
                        $("#rows_count").val(response.all_filtered_cnt);
                        if(response.status == 'success')
                        {
                            $('#'+$(this).attr('id')).prop("disabled", false);
                            $(".dt_checkbox").prop('checked', false);
                            // $("#count_dt_selected").text(0);
                            $(".selectedRow").text('0 Selected');
                            $(".actions-top").hide();
                            $(".chkAll").prop('checked', false);
                            $('.defaultHide').hide();
                            $('.defaultShow').show();   
                            oTable.draw();  
                        }else{
                            $('#'+$(this).attr('id')).prop("disabled", false);
                        }
                    }, 
                    complete:function(){
                        $('body').removeClass('card-refresh refresh-before');
                    },
                    error: function (data) {
                        $('#'+action).prop("disabled",false);
                        $.toaster({ priority : response.status, title : response.title, message : response.message });
                    }
                });
            }
        });

        $('body').off('click', '.bulk_actions').on('click', '.bulk_actions', function (e) {
            e.preventDefault();
            $('#'+$(this).attr('id')).prop("disabled", true);

            var clicked_item = $(this).attr('id');
            var idsArr = [];  var strIds = ''; var selectedStatusLeads = '';

            $(".dt_checkbox:checked").each(function() {  
                idsArr.push($(this).attr('data-id'));
            });
            
            if(idsArr.length <= 0)  
            {  
                alert("Please select atleast one record.");
                $('#'+$(this).attr('id')).prop("disabled", false);
            }
            else
            {  
                var r = false;
                if(clicked_item == 'deactivate_user')
                {
                    r = true;
                }
                else if(clicked_item == 'export_users')
                { 
                    r = true;
                }
                else if(clicked_item == 'activate_deactivate_trigger')
                { 
                    r = true;
                }
                else if(clicked_item == 'bulk_delete'){
                    $('#deleteModaltest').modal('show'); 
                    $('#deleteModaltest').addClass('show'); 
                    setTimeout(function(){          
                        $("#current_user_delete").val(idsArr);
                        $("#current_method_delete").val(clicked_item);
                    },50);
                }

                if(r == true)
                {
                    var strIds = idsArr.join(",");
                    if($("#select_type").val() == 'select_all')
                    {
                        selectedStatusLeads = 'all';
                    }
                    else
                    {
                        selectedStatusLeads = strIds;
                    }
                        
                    do_action_on_users(selectedStatusLeads,clicked_item);
                }
            }
        });

        // do action on selected leads
        function do_action_on_users(selectedStatusUsers,action)
        {
            var url1 = users_do_action;
            var ids = selectedStatusUsers;
            var all_tables='';

            if ($('#all_tables').is(':checked')) {
            var all_tables='all';
            }

            $.ajax({
                url: url1,
                type: 'POST',
                beforeSend:function(){
                    $('.modal-body').addClass('card-refresh refresh-before');
                },
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { ids : ids, action : action,all_tables:all_tables},
                beforeSend:function(){
                    $('body').addClass('card-refresh refresh-before');
                },
                success:function(response){                     
                    if(response.status == 'success')
                    {
                        $('.modal').modal('hide');
                    }                   
                    $.toaster({ priority : response.status, title : response.title, message : response.message });
                    $("#rows_count").val(response.all_filtered_cnt);
                    if(response.status == 'success')
                    {
                        if(action == 'export_users')
                        {
                            $('#'+action).prop("disabled",false);
                            var url = site_url + '/leads/downloadfile/' + response.file_name;
                            window.location = url;                          
                        } else if(action == 'deactivate_user') {
                            
                        } else if(action == 'single_delete' || action == 'bulk_delete') {
                            $('#deleteModaltest').modal('hide'); 
                            $('#deleteModaltest').removeClass('show');                          
                        } 
                        $('#'+action).prop("disabled",false);
                        $(".dt_checkbox").prop('checked', false);
                        $(".selectedRow").text('0 Selected');
                        $(".actions-top").hide();
                        $(".chkAll").prop('checked', false);
                        $('.defaultHide').hide();
                        $('.defaultShow').show();
                        local.reload_page_func();                                   
                    }else{
                        $('#'+action).prop("disabled",false);
                    }
                }, 
                complete:function(){
                    $('body').removeClass('card-refresh refresh-before');
                },
                error: function (data) {
                    $('#'+action).prop("disabled",false);
                    $.toaster({ priority : response.status, title : response.title, message : response.message });
                }
            });
        }

        $('body').off('click', '.delete-user').on('click', '.delete-user', function (e) {
            var user_id = $(this).attr('id'); 
            setTimeout(function(){          
                $("#current_user_delete").val(user_id);
                $("#current_method_delete").val('single_delete');
             },50);
        });

        $('body').off('click', '#deleteConfirmation').on('click', '#deleteConfirmation', function (e) {
                e.preventDefault();
                var user_ids=$("#current_user_delete").val();
                var method=$("#current_method_delete").val();
                var delete_text=$("#delete_text").val();
                if(delete_text !== 'delete') {
                    $("#delete_text").addClass('parsley-error');
                    return false;
                } else {
                    $("#delete_text").removeClass('parsley-error');
                    do_action_on_users(user_ids, method);
                }
            
        });

        $("#delete_text").on("change paste keyup", function() {
           if($(this).val() == 'delete') {
                $("#delete_text").removeClass('parsley-error');
           } else {
                
           }
        });

        $('#deleteModaltest').on('hidden.bs.modal', function (e) {
          $(this)
            .find("input,textarea,select")
               .val('')
               .end()
            .find("input[type=checkbox], input[type=radio]")
               .prop("checked", "")
               .end();
            $("#delete_text").removeClass('parsley-error');
        });

        $('.edit-user-form').submit(function(e) {    
            
                e.preventDefault();             
                if(!$(this).parsley().validate()) {
                    return false;
                }
                $('#edit-user-details').css('pointer-events','none');
                var formdata = $(this).serialize();
                var url = $(this).attr('action');
                $.ajax({
                    headers: { 
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                    },
                    url: url,
                    type: "PUT",
                    data: formdata,
                    beforeSend:function(){
                        $('.modal-body').addClass('card-refresh refresh-before');
                    },
                    success: function (response) {
                        $('.modal').modal('hide');
                        $.toaster({ priority : response.status, title : response.title, message : response.message });
                    },
                    complete: function () {
                        $('.modal-body').removeClass('card-refresh refresh-before');
                        local.reload_page_func();
                    }
                });
            });

        // function to save columns list for user
        $('body').off('click', '#save_columns_user').on('click', '#save_columns_user', function (e) {
            e.preventDefault();
            $('#save_columns_user').prop("disabled", true);

            var idsInOrder = $("#sortable").sortable("toArray");
            var columns_arr = []; var selected_columns_arr = [];
            $.each( idsInOrder, function( key, value ) {
                if($("#txt_"+value).prop("checked") == true)
                {
                    selected_columns_arr.push(value);
                }
                columns_arr.push(value);
            });

            var url1 = users_save_columns;
            $.ajax({
                url: url1,
                type: 'POST',
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                data: { columns_arr : columns_arr, selected_columns_arr : selected_columns_arr},
                beforeSend:function(){
                    $('.modal-body').addClass('card-refresh refresh-before');
                },
                success:function(response){ 
                    if(response.status == 'success')
                    {
                        $('.modal').modal('hide');
                        local.reload_page_func();
                    }
                    $.toaster({ priority : response.status, title : response.title, message : response.message });
                },
                complete:function(){
                    $('.modal-body').removeClass('card-refresh refresh-before');
                },
                error: function (data) {
                    $.toaster({ priority : response.status, title : response.title, message : response.message });
                }
            });
        });

        return oTable;
    }
    return $AdminusersObj;
})( window, Request, $ );

AdminusersManager.events();
AdminusersManager.reload_events();
AdminusersManager.loadTables();</script>
@endpush
