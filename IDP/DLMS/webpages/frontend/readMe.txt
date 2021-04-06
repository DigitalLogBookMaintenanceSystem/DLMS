In this folder the front end will be kept.
Seemingly only the front end parts that include only the front parts will be here.
what ever is here is going to be included in this read me file thus easining up the process of getting or searching the files.


0.  Home page contents login btn,about btn and some small clips of the DLMS.    Current-Page 0


1.  Log in page                                                                 Current-Page 1
  a.  contents
      (1) user id field
      (2) password field
      (3) button-login x1
  b. references
      (1) (Log in btn) After log in pages based on user id                      New-Page  3-5
      (2) (Sign Up nav-bar) sign in page if login is not feasible               New-Page 2
  c. Help (nav bar)
  d. Log Out (nav bar)


2. Sign in page                                                                 Current-Page 2
  a.  contents - form
      (1) Unit Name
      (2) Appt of User
      (3) Workshop Under(Only available if appt is QM)
      (4) User Name
      (5) User Password
      (6) Re-Enter Password
  b. contents - other
      (1) button-confirm x1
  c. references
      (1) (Log in nav-bar) Pre-log in page (data deleted from current page)     Previous-Page/New-Page 1
      (2) (Confirm btn) same page but data is stored and page refreshed         Same-Current--Page 2
  d. Help (nav bar)
  e. Log Out (nav bar)


3-5  Now based of login appt there are 3 different log in possibilities each
     with different power and jobs and tasks.


3.   Log in as QM                                                               Current-Page 3
  a.  contents
      (1) 3 cards
        (a) create work order cards
        (b) view logbook cards
            (i) contents
                search box(BA Number),search btn
        (c) Edit Profile card
  b. references
      (1) card- 1. create Work order cards page                                 New-Page 6
      (2) card- 2.(search btn) show logbook page of given BA number             New-Page 7
      (3) card- 3. Edit Profile (can edit unit name and                         New-Page 8
                                Workshop unit under only)
  c. Help (nav bar)
  d. Log Out (nav bar)


4.  Log in as RI&I                                                              Current-Page 4
  a. Contents
    (1) 8 cards
      (a) View logbook card
          (i) contents
              search box(BA Number),search btn
      (b) Update Logbook card
          (i) contents
              search box(BA Number),search btn
      (c) Create new Logbook (btn)
      (d) Create Job card (btn)
      (e) View All the job cards (maybe with a search number)
      (f) View QM List  (has build-in add & update page) (btn)
      (g) Pending Work orders (just to approve any work orders) (btn)
      (h) show all work orders (btn)
  b. references
    (1) card-1 . (search btn) show logbook page of given BA number              Old-Page 7
    (2) card-2 . (search btn) Update logbook page of given BA number            New-Page 9
    (3) card-3 . create a new logbook with new BA Number                        New-Page 10
    (4) card-4 . create a new Job card for the new vehicle                      New-Page 11
    (5) card-5 . show all the job cards that are curretnly open.                New-Page 17
    (6) card-6 . show the list of all registered quartermasters                 New-Page 12-14
    (7) card-7 . show if there is any pending work orders from any QM           New-Page 15
    (8) card-8 . show all work orders from any QM                               New-Page 18

  c. Help (nav bar)
  d. Log Out (nav bar)


5.  Log in as Wksp Offr                                                         Current-Page 5
  a. Contents
    (1) 3 cards
    (a) View logbook card
        (i) contents
            search box(BA Number),search btn
    (b) Pending Logbook close permission card
    (c) View QM List card
  b. references
    (1) card-1 . (search btn) show logbook page of given BA number              Old-Page 7
    (2) card-2 . show if any new updates in the logbook is done and
                  needs revision and permission (shows the logbook also)        New-Page 16
    (3) card-3 . show ONLY the list of all registered quartermasters            New-Page 12
  c. Help (nav bar)
  d. Log Out (nav bar)


6. new  Work Order page  (form)                                                 Current-page 6
    a. Contents-form
      (1)
      (2)
      (3)
      (4)
      (5)
      (6)
    b. Contents-other
      (1) btn-submit
      (2) btn-back
    c. references
      (1) btn-submit will take you back to home screen after changes            Old-Page 3
      (2) btn-back will take you back to homes creen without changes            Old-Page 3

    d. Help (nav bar)
    e. Log Out (nav bar)


7. View Logbook page                                                            Current-Page 7
  a. Contents-form
    (1)
    (2)
    (3)
    (4)
    (5)
    (6)
  b. Contents-other
      (1) btn-back
  c. references
      (1) btn-back will take you back to homes creen without changes            Old-Page 3-5
  d. Help (nav bar)
  e. Log Out (nav bar)
  f. 3 different authority has different jobs with this pages
    (1) QM canonly see it
    (2) RI&I can update it/add new / delete
    (3) Can inspect and ask for mistake updates/permit any updates


8.  Edit Profile                                                                Current-Page 8
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) submit btn
    (2) back btn
  c. references
    (1) submit btn takes to QM's after Login page with changes done             Old-Page 3
    (2) back btn takes to Qm's after Login page without changes                 Old-Page 3
  d. Help (nav bar)
  e. Log Out (nav bar)


9. Update Logbook pages     (form)                                              Current-Page 9
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) submit btn
    (2) Discard btn
  c. references
    (1) submit btn takes to RI&I's after Login page with changes done           Old-Page 4
    (2) Discard btn takes to RI&I's after Login page without changes            Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)


10. New Logbook      (form)                                                     Current-Page 10
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) Create btn
    (2) Discard btn
  c. references
    (1) Create btn takes to RI&I's POV of view logbook with changes done        Old-Page 7
    (2) Discard btn takes to RI&I's after Login page without changes            Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)

11. New Job Card     (form)                                                     Current-Page 11
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) Create btn
    (2) Discard btn
  c. references
    (1) Create btn takes to RI&I's  after Login page with changes done          Old-Page 17
    (2) Discard btn takes to RI&I's after Login page without changes            Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)

12. Show QM List                                                                Current-Page 12
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) Back btn
  c. references
    (1) Back btn takes to RI&I's  after Login page                              Old-Page 17
  d. Help (nav bar)
  e. Log Out (nav bar)

13. Update QM List   (form)                                                     Current-Page 13
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) Create btn
    (2) Discard btn
  c. references
    (1) Create btn takes to RI&I's view QM page with changes done               Old-Page 12
    (2) Discard btn takes to RI&I's view QM page without changes                Old-Page 12
  d. Help (nav bar)
  e. Log Out (nav bar)

14. Add to QM list - (form)                                                     Current-Page 14
  a. Contents-form
    (1)
    (2)
  b. Contents-other
    (1) Create btn
    (2) Discard btn
  c. references
    (1) Create btn takes to RI&I's view QM page with changes done               Old-Page 12
    (2) Discard btn takes to RI&I's view QM page without changes                Old-Page 12
  d. Help (nav bar)
  e. Log Out (nav bar)


15. show pending work orders                                                    Current-Page 15
  a. Contents-list
    (1)
    (2)
  b. Contents-other
    (1) Back btn
    (2) Aprove All
  c. references
    (1) Back btn takes to show all Work Orders page                             Old-Page 18
    (1) Aprooves all pending workorders and goes to home page                   Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)

16. show pending Logbook closing                                                Current-Page 16
  a. Contents-list
    (1)
    (2)
  b. Contents-other
    (1) Back btn
    (2) Aprove All
  c. references
    (1) Back btn takes to wksp o's home page                                    Old-Page 5
    (1) Aprooves all pending workorders and goes to view Logbook                Old-Page 7

  d. Help (nav bar)
  e. Log Out (nav bar)

17. show all job cards                                                          Current-Page 17
  a. Contents-list
    (1)
    (2)
  b. Contents-other
    (1) Back btn
  c. references
    (1) Goes back to the previous page                                          Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)

18. show all Work orders                                                        Current-Page 18
  a. Contents-list
    (1)
    (2)
  b. Contents-other
    (1) Back btn
  c. references
    (1) Goes back to the previous page                                          Old-Page 4
  d. Help (nav bar)
  e. Log Out (nav bar)
