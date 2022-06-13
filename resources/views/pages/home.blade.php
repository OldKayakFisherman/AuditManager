@extends ('layouts.public_layout')

@section('content')

    <div class="container">
        <form action="/" method="post" enctype="application/x-www-form-urlencoded">

        <input id="hdnSelectedApp" type="hidden" value="{{$selectedApp}}" />
        <input id="hdnSelectedStartDate" type="hidden" value="{{$selectedStartDate}}" />
        <input id="hdnSelectedEndDate" type="hidden" value="{{$selectedEndDate}}" />

            @csrf
        <div class="row mt-3">
            <div class="col-4">
                <div class="input-group">
                    <label class="form-label mt-1" for="selApplication" title="Application">Application:</label>
                    <select class="ms-1 form-control form-control-sm" id="selApplication" name="prmApp">
                        <option value=""></option>
                        @foreach($apps as $app)
                            <option value="{{ $app['app'] }}">{{ $app['app'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="form-label mt-1" for="prmStartDate" title="Start Date">Start:</label>
                    <input class="ms-1 form-control form-control-sm" name="prmStartDate" id="prmStartDate" type="date"/>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="form-label mt-1" for="prmEndDate" title="End Date">End:</label>
                    <input id="prmEndDate" name="prmEndDate" class="ms-1 form-control form-control-sm" type="date"/>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <input type="submit"  class="btn btn-primary" value="Search" />
                </div>
            </div>
        </div>
        </form>
        <div class="row mt-3">
            <form action="/analyze" method="post" enctype="application/x-www-form-urlencoded">
                @csrf
                <div class="col-2 offset-10">
                    <a class="btn btn-success ms-5">Analyze Logs</a>
                </div>
            </form>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th><a class="sortableLink" href="#">Remote Address</a></th>
                        <th><a class="sortableLink" href="#">User</a></th>
                        <th><a class="sortableLink" href="#">Type</a></th>
                        <th><a class="sortableLink" href="#">Date</a></th>
                        <th><a class="sortableLink" href="#">Headers</a></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($logs as $log)
                        <tr>
                            <td>{{$log['referrer']}}</td>
                            <td>{{$log['user_account']}}</td>
                            <td>{{$log['type']}}</td>
                            <td>{{$log['event_date']}}</td>
                            <td>{{$log['request_headers']}}</td>
                            <td><a href="#">Detail</a></td>
                        </tr>
                    @endforeach

                    </tbody>
                    <tfoot>
                        {{ $logs->links() }}
                    </tfoot>

                </table>

            </div>
        </div>
    </div>

@stop

<script>

    window.onload = function() {
        let selectedApp = document.getElementById('hdnSelectedApp');
        let selectedStartDate = document.getElementById('hdnSelectedStartDate');
        let selectedEndDate = document.getElementById('hdnSelectedEndDate');

        if(selectedApp !== null){
            if(selectedApp.value.trim().length > 0)
            {
                let selectApplication = document.getElementById('selApplication');

                if(selectApplication !== null){
                    for(let i=0; i<selectApplication.options.length;i++){
                        if(selectApplication.options[i].value === selectedApp.value){
                            selectApplication.options[i].setAttribute('SELECTED','');
                        }
                    }
                }
            }
        }

        if(selectedStartDate !== null && selectedStartDate.value.trim().length > 0){
            document.getElementById('prmStartDate').value = selectedStartDate.value;
        }

        if(selectedEndDate !== null && selectedEndDate.value.trim().length > 0){
            document.getElementById('prmEndDate').value = selectedEndDate.value;
        }
    }

</script>
