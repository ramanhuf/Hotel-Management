@extends('layouts.app')

@section('content')
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card dashboard-card bg-primary-gradient">
                <div class="card-icon">
                    <i class="bi bi-door-open"></i>
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title">Total Rooms</h3>
                    <h2 class="card-value">{{ $totalRooms }}</h2>
                    <div class="card-footer-stats">
                        <span class="badge bg-light text-primary">
                            <i class="bi bi-arrow-up"></i> 5% from last month
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card dashboard-card bg-success-gradient">
                <div class="card-icon">
                    <i class="bi bi-calendar-check"></i>
                </div>
                <div class="card-body text-center">
                    <h3 class="card-title">Total Reservations</h3>
                    <h2 class="card-value">{{ $reservedRoom }}</h2>
                    <div class="card-footer-stats">
                        <span class="badge bg-light text-success">
                            <i class="bi bi-arrow-up"></i> 12% from last month
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- You can add more cards here following the same pattern -->
    </div>

<style>
    .dashboard-card {
        border: none;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        color: white;
        padding-top: 20px;
        min-height: 220px;
    }
    
    .dashboard-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.2);
    }
    
    .card-icon {
        font-size: 2.5rem;
        margin-bottom: 15px;
        text-align: center;
    }
    
    .card-title {
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 10px;
        letter-spacing: 0.5px;
    }
    
    .card-value {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 15px;
    }
    
    .card-footer-stats {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 10px;
        background: rgba(255,255,255,0.2);
        text-align: center;
    }
    
    .bg-primary-gradient {
        background: linear-gradient(135deg, #3a7bd5 0%, #00d2ff 100%);
    }
    
    .bg-success-gradient {
        background: linear-gradient(135deg, #00b09b 0%, #96c93d 100%);
    }
    
    /* Add more gradient colors for additional cards */
    .bg-warning-gradient {
        background: linear-gradient(135deg, #f46b45 0%, #eea849 100%);
    }
    
    .bg-danger-gradient {
        background: linear-gradient(135deg, #ff416c 0%, #ff4b2b 100%);
    }
</style>
@endsection