// Admin side *******

1) http://localhost/f6/admin/bookings 
    => 'first alert message popup with some ajax datatable and than page load (screen-shot)'

2) http://localhost/f6/admin/customers 
    => 'on user table chenge password validation is not same as customer side and also same in user or driver managment 

3) http://localhost/f6/admin/drivers/10/edit
    => 'fix date selection validation start-date and end-date (screen-shot) '

4) http://localhost/f6/admin/bookings/create 
    => 'fix date select validation some time works when customer is selected'

5) http://localhost/f6/admin/reports/expense
    => click on print button than page is not redirect at same page, it show print page in full screen make it redirect and page is not redirect than open in new tab (change it in all pages wherever print button is exist)

DATE URL : 

        1. http://localhost/f6/admin/drivers/create (Issue Date, Expiration Date, Join Date, Leave Date)
        2. http://localhost/f6/admin/vehicle-reviews-create (Date & Time Outgoing, Date & Time Incoming)
        3. http://localhost/f6/admin/income (from, to)
        4. http://localhost/f6/admin/expense (from, to)
        5. http://localhost/f6/admin/bookings/create (Pickup Date & Time, Dropoff Date & Time)
        6. http://localhost/f6/admin/bookings/4/edit (Pickup Date & Time, Dropoff Date & Time)
        7. http://localhost/f6/admin/booking-quotation/create (Pickup Date & Time, Dropoff Date & Time)
        8. http://localhost/f6/admin/reports/vendors (from, to)

PRINT BUTTON :

        1. http://localhost/f6/admin/bookings (already open in new page)
        2. http://localhost/f6/admin/reports/income
        3. http://localhost/f6/admin/reports/expense
        4. http://localhost/f6/admin/reports/delinquent
        5. http://localhost/f6/admin/reports/monthly
        6. http://localhost/f6/admin/reports/booking
        7. http://localhost/f6/admin/reports/users
        8. http://localhost/f6/admin/reports/work-order
        9. http://localhost/f6/admin/reports/fuel
        10. http://localhost/f6/admin/reports/customers
        11. http://localhost/f6/admin/reports/drivers
        12. http://localhost/f6/admin/reports/vendors
        13. http://localhost/f6/admin/reports/yearly


// Frontend HTML side ******

1) http://localhost/f6/booking-history/9
    => 'footer not set properlly when booking history is null or empty'


// Android API ********

1) /api/update-destination - POST update destination
    => 'destination update only on completed ride not update pending rides'

2) /api/user-single-ride - POST user's sigle-ride requests
    => 'only get details who ride is completed same as above'

3) /api/cancel-ride-request - POST cancle ride requests
    => 'competed ride also cancled'

4)  /api/reject-ride-request - POST reject ride requests
    => 'don't understand'

5) /api/get-reviews - POST driver reviews
    => 'not submited on completed ride'
    => 'submited review on pending ride'

6) /api/start-ride - POST start ride
    => 'start ride only on completed ride'
    => 'not start in pending ride'

7) /api/destination-reached - POST destination reached
    => 'not submited on peding ride'
    => 'submited on completed ride'

8) /api/accept-ride-request -  POST accept ride requests
    => 'change field name user_id to driver_id'
    => 'driver also accept completed ride'

9) /api/single-ride-info - POST single ride info 
    => 'ride info not fetched in my case'

10) /api/update-fcm-token - POST update fcm tokken
    => 'success meassage: 0 '


// Frontend API *********

testing pending
