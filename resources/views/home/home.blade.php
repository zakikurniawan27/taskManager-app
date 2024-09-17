@extends('home.layout')

@section('content')
    
<section class="d-flex justify-content-center align-items-center" style="width: 100%; height:100%">
    <div class="d-flex">
        <div class="card" style="width: max-content; height: max-content; background-color: #54BAB9">
            <div class="card-body">
                <h4 class="card-title fs-6 text-white ps-3">--- Categories ---</h4>
                <div class="d-flex flex-column ps-1">
                    <a href="http://" class="mb-1">
                        <button type="submit" class="btn btn-success pt-0 pb-0" style="width: 20vh">Complete</button>
                    </a>
                    <a href="http://" class="mt-1 mb-1">
                        <button type="submit" class="btn btn-danger pt-0 pb-0" style="width: 20vh">Urgent</button>
                    </a>
                    <a href="http://" class="mt-1 mb-1">
                        <button type="submit" class="btn btn-warning text-white pt-0 pb-0" style="width: 20vh">Important</button>
                    </a>
                    <a href="http://" class="mt-1 mb-1">
                        <button type="submit" class="btn text-white pt-0 pb-0" style="background-color: #9C27B0; width: 20vh">Alert</button>
                    </a>
                    <a href="http://" class="mt-1 mb-5">
                        <button type="submit" class="btn text-white pt-0 pb-0" style="background-color: #25A7B8; width: 20vh">To Study</button>
                    </a>
                    <a href="http://" class="mt-1">
                        <button type="submit" class="btn text-white pt-0 pb-0" style="background-color: #38938A; width: 20vh">Add category</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column ms-2">
            <div class="card mb-2" style="background-color: #54BAB9; width: 70vh; height:max-content">
                <div class="d-flex justify-content-between p-1">
                    <p class="ms-2 lh-1 mb-0 mt-1" style="color: #1D8A8A">1 Tasks</p>
                    <a href="http://">
                        <button class="btn text-white pt-0 pb-0" style="background-color: #38938A" type="submit">Add New Task</button>
                    </a>
                    <form action="" method="POST">
                        @csrf
                        <p class="me-2 lh-1 mb-0 mt-1" style="color: #1D8A8A">Delete Complete</p>
                    </form>
                </div>
            </div>
            <div class="card" style="background-color: #54BAB9; width: 70vh; height:max-content">
                <div class="card-body pb-0">
                    <div class="d-flex justify-content-between">
                        <p class="text-white mb-0 mt-1">Memorize the fifty states and their capitals</p>
                        <button class="btn btn-success pt-0 pb-0">Complete</button>
                    </div>
                    <div class="d-flex justify-content-center pt-3">
                        <p class="fw-semibold lh-1" style="color: #1D8A8A">Active</p>
                        <p class="fw-semibold text-white ms-2 lh-1" >All</p>
                        <p class="fw-semibold ms-2 lh-1" style="color: #1D8A8A">Complete</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection