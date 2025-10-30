<?php

namespace App\Exports;

use App\Models\Attendee;
use App\Models\Stafflist;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class AttendeeExport implements FromCollection, WithMapping,WithHeadings, ShouldAutoSize
{

    use Exportable;

    protected $attendees;

    protected $counter = 0;

    // public function __construct($attendees)
    // {
    //     $this->attendees = $attendees;
    // }

     /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      return  $this->attendees = Stafflist::all();
    
    }

    public function map($attendees): array
    {
        $this->counter++;
        return [
            $this->counter,
            $attendees->hmo,
            $attendees->staff_number,
            $attendees->fullname,
            $attendees->department,
            $attendees->station,
            $attendees->phone,
            $attendees->state_of_residence,
            $attendees->nin,
        ];
    }

    public function headings(): array
    {
        return [
            "#",
            'HMO',
            'Staff No',
            'Fullname',
            'Department',
            'Station',
            'Phone',
            'State Of Residence',
            'NIN',

        ];
    }



   
}
