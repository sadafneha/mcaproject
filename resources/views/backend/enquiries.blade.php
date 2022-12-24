@extends('backend.layouts.default')

@section('content')
<main id="main" class="main">
    <div class="pagetitle">
        <h1>List of Enquiries</h1>

    </div>
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <!-- <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th width="350">Message</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($enquiries as $enquiry)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <th>{{$enquiry->name}}</th>
                                    <th>{{$enquiry->email}}</th>
                                    <th>{{$enquiry->subject}}</th>
                                    <th width="350">{{$enquiry->message}}</th>
                                </tr>
                                @endforeach
                            </tbody>
                        </table> -->
                        <h5 class="card-title">My Enquiries</h5>
                        <div class="accordion" id="accordionExample">
                            @foreach($enquiries as $enquiry)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{$loop->iteration}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                        Enquiry: {{$loop->iteration}}
                                    </button>
                                </h2>
                                <div id="collapse{{$loop->iteration}}" class="accordion-collapse collapse show" aria-labelledby="heading{{$loop->iteration}}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <h5>
                                            <span class="badge border-primary border-1 text-primary">Name:</span>
                                            <!-- <span class="badge bg-primary">Name:</span> -->
                                            <span class="badge border-secondary border-1 text-secondary">{{$enquiry->name}}</span>
                                        </h5>
                                        <h5>
                                            <p class="badge border-primary border-1 text-primary">Email:</p>
                                            <span class="badge border-secondary border-1 text-secondary">{{$enquiry->email}}</span>
                                        </h5>
                                        <h5>
                                            <p class="badge border-primary border-1 text-primary">Subject:</p>
                                            <span class="badge border-secondary border-1 text-secondary">{{$enquiry->subject}}</span>
                                        </h5>
                                        <h5>
                                            <p class="badge border-primary border-1 text-primary">Message:</p>
                                        </h5>
                                        {{$enquiry->message}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            @if(!$enquiries)
                            <h1>No Enquiries made from this email.</h1>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection