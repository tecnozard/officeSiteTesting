<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Openings</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
         .container {
            margin-left: 90px !important;
        }
    </style>
</head>

<body class="bg-light">
    @extends('components.admin.adminnavbar')

    @section('content')
    <div class="container mt-4">
        <h2 class="text-center">Job Openings</h2>

        <!-- Job Posting Form -->
        <div class="card p-3 mb-4">
            <h4>Add Job Posting</h4>
            <form id="jobForm" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Job Title</label>
                    <input type="text" class="form-control" name="title" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <select class="form-control" name="category" required>
                        <option value="" disabled selected>Select Category</option>
                        <option value="IT">IT</option>
                        <option value="Non-IT">Non-IT</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Photo</label>
                    <input type="file" class="form-control" name="photo" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary">Add Job</button>
            </form>
        </div>

        <!-- Job Listings -->
        <div class="card p-3">
            <h4>All Job Openings</h4>
            <ul id="jobList" class="list-group">
                <!-- Job items will be added dynamically -->
            </ul>
        </div>
    </div>
    @endsection



    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetchJobs(); // Load jobs on page load

            document.getElementById("jobForm").addEventListener("submit", function(event) {
                event.preventDefault();
                let formData = new FormData(this);

                fetch('/api/jobs', {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.error) {
                            alert("Error: " + JSON.stringify(data.error));
                        } else {
                            alert("Job added successfully!");
                            fetchJobs();
                            this.reset();
                        }
                    })
                    .catch(error => console.error("Error:", error));
            });

            function fetchJobs() {
                fetch('/api/jobs')
                    .then(response => response.json())
                    .then(jobs => {
                        let jobList = document.getElementById("jobList");
                        jobList.innerHTML = "";
                        jobs.forEach(job => {
                            let listItem = document.createElement("li");
                            listItem.className = "list-group-item d-flex justify-content-between align-items-center";
                            listItem.innerHTML = `
                    <div>
                        <strong>${job.title}</strong> - ${job.category} <br>
                        <img src="/storage/${job.photo}" width="100">
                    </div>
                    <button class="btn btn-danger btn-sm" onclick="deleteJob(${job.id})">Delete</button>
                `;
                            jobList.appendChild(listItem);
                        });
                    });
            }

            window.deleteJob = function(id) {
                fetch(`/api/jobs/${id}`, {
                        method: 'DELETE'
                    })
                    .then(response => response.json())
                    .then(data => {
                        alert(data.message);
                        fetchJobs();
                    })
                    .catch(error => console.error("Error:", error));
            };
        });
    </script>

</body>

</html>
