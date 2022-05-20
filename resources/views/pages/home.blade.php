@extends ('layouts.public_layout')

@section('content')

    <div class="container">
        <form action="/search" method="post" enctype="application/x-www-form-urlencoded">
            @csrf
        <div class="row mt-3">
            <div class="col-4">
                <div class="input-group">
                    <label class="form-label mt-1" htmlFor="selApplication" title="Application">Application:</label>
                    <select class="ms-1 form-control form-control-sm" id="selApplication">
                        <option value="DEFAULT"></option>
                        @foreach($apps as $app)
                            <option value="{{ $app['app'] }}">{{ $app['app'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="form-label mt-1" for="txtStartDate" title="Application">Start:</label>
                    <input class="ms-1 form-control form-control-sm" name="prmStartDate" id="txtStartDate" type="date"/>
                </div>
            </div>
            <div class="col-2">
                <div class="input-group">
                    <label class="form-label mt-1" htmlFor="txtEndDate" title="Application">End:</label>
                    <input id="txtEndDate" class="ms-1 form-control form-control-sm" type="date"/>
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
                    <tr>
                        <td>192.168.1.1</td>
                        <td>System</td>
                        <td>Application Start-Up</td>
                        <td>1/1/2023 13:01:23</td>
                        <td>POST /cgi-bin/process.cgi HTTP/1.1
                            User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
                            Host: www.tutorialspoint.com
                            Content-Type: application/x-www-form-urlencoded
                            Content-Length: length
                            Accept-Language: en-us
                            Accept-Encoding: gzip, deflate
                            Connection: Keep-Aliv</td>
                        <td><a href="#">More</a></td>
                    </tr>
                    <tr>
                        <td>192.168.1.2</td>
                        <td>System</td>
                        <td>Application Shut-Doen</td>
                        <td>1/1/2023 13:11:38</td>
                        <td>POST /cgi-bin/process.cgi HTTP/1.1
                            User-Agent: Mozilla/4.0 (compatible; MSIE5.01; Windows NT)
                            Host: www.tutorialspoint.com
                            Content-Type: application/x-www-form-urlencoded
                            Content-Length: length
                            Accept-Language: en-us
                            Accept-Encoding: gzip, deflate
                            Connection: Keep-Aliv</td>
                        <td><a href="#">More</a></td>
                    </tr>
                    </tbody>

                </table>

            </div>
        </div>
    </div>

@stop
