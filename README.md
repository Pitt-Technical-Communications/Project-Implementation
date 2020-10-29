# Project-Implementation
Engcomp 600 Project #4

# Project Goals:
  Develop a queue system to replace real-life lines at restaurants. Due to Covid’s lasting impact large groupings of people need to be minimized and waiting at the popular restaurant is one of these large groupings. TO this end the project seeks to create a queue system for customers to join and receive a rough estimate of when a table will be available. On the restaurants end, hosts can view the queue and remove those who fail to show up and assign those near the front to tables that are free. The hosts can also issue notices regarding longer delays, and possibly pad the ETA to reflect a longer wait. To register as a restaurant some verification must be met to ensure false registrations as for customers they may have their accounts suspended, or name blacklisted from places, if they constantly fail to show when alerted a table is ready without prior notice they are leaving the queue.

Demo for project: https://mac479.github.io/Project-Implementation/

# Q&A
  * How do you enter the queue?
    * Simply enter name and party size, queue will put in your name in a list visible to restaurants and then alert you when the host       signals that a table is created.
  * If ETA is 0 but a table isn't free what happens?
    * The app will display a message saying they are next in line but a table is taking longer than usual. Hopefully a host would
      send out an alert to alert customers to longer than usual wait times and possibly add some sort of padding to queue as a way to
      reflect the longer wait.
