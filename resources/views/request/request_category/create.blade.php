@extends('frontend.home')
@section('title', 'Created Pengajuan')
@section('title-content', 'Created ' . $category->name)
@section('content')

    @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="col-md-12 col-sm-12 col-xl-12">
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        </div>
        @endforeach
    @endif

    <div class="col-sm-12 col-md-12 col-xl-12">
        <a href="{{ route('requestby.category.index', $category->id) }}" class="btn btn-primary"><i class="fa fa-arrow-left"></i> Back</a>
    </div>

    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_content"> 
                <form action="{{ route('requestby.category.store') }}" method="post" data-parsley-validate class="form-horizontal form-label-left">    
                    @csrf
                    <input type="hidden" name="category_id" value="{{ $category->id }}">
                    <input type="hidden" name="creator_id" value="{{ Auth::user()->id }}">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-xl-6 col-md-offset-3">
                            <div class="col-xs-12 form-group has-feedback">
                                <label for="applicant_id" class="title">Pengaju</label>
                                <select name="applicant_id" id="applicant_id" class="form-control js-example-matcher-start">
                                  @foreach($users as $user)
                                  <option value="{{ $user->id }}">{{ $user->name }}</option>
                                  @endforeach
                              </select>
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <label for="code" class="title">Code</label>
                                <input class="form-control" name="code" value="{{ $code }}" id="code" type="text">
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <label for="date" class="title">Date</label>
                                <input class="form-control datepick" name="date" id="date" type="text">
                            </div>
                            
                            <div class="col-xs-12 form-group has-feedback">
                                <label for="perihal" class="title">Perihal</label>
                                <input class="form-control" name="perihal" id="perihal" type="text">
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <label for="total" class="title">Total</label>
                                <input class="form-control" name="total" id="total" type="number">
                            </div>

                            <div class="col-xs-12 form-group has-feedback">
                                <label for="amount" class="title">Terbilang</label>
                                <input class="form-control" name="amount" id="amount" type="text">
                            </div>

                            <div class="col-xs-12 form-group">
                                <button class="btn btn-primary">Create Pengajuan</button>
                            </div>            
                        </div> 
                    </div>

                </form>
            </div>
        </div>
    </div>


@endsection

@section('css')
        <!-- bootstrap-daterangepicker -->
        <link href="/frontend/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <link href="/frontend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
@endsection

@section('js')
    <!-- Parsley -->
    <script src="/frontend/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Select2 -->
    <script src="/frontend/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="/frontend/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- bootstrap-daterangepicker -->
    <script src="/frontend/vendors/moment/min/moment.min.js"></script>
    <script src="/frontend/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
        $(".js-example-matcher-start").select2({
            matcher: function(params, data) {
                // If there are no search terms, return all of the data
                if ($.trim(params.term) === '') { return data; }

                // Do not display the item if there is no 'text' property
                if (typeof data.text === 'undefined') { return null; }

                // `params.term` is the user's search term
                // `data.id` should be checked against
                // `data.text` should be checked against
                var q = params.term.toLowerCase();
                if (data.text.toLowerCase().indexOf(q) > -1 || data.id.toLowerCase().indexOf(q) > -1) {
                    return $.extend({}, data, true);
                }

                // Return `null` if the term should not be displayed
                return null;
            }
        });
  </script>

    <script type="text/javascript">

        $(function() {
            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {

                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));

            }

            $('.datepick').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {

                // 'Today': [moment(), moment()],

                'Tomorrow': [moment(), moment().add(1, 'days'),],

                '7 Days': [moment(), moment().add(6, 'days')],

                '30 Days': [moment(), moment().add(29, 'days')],

                }

            }, cb);
            cb(start, end);
        });

    </script>

@endsection