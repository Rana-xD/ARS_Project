<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class FormController extends Controller
{
    public function RequestRegister(Request $request) {
      /* Personal Information */
        $ContractType = $request->contract_type;
        $OccupationYear = $request->occupacy_year;
        $OccupationMonth = $request->occupacy_month;
        $OccupationDate = $request->occupacy_date;
        $OccupationStatus = $request->occupacy_status;
        //Artical Location Section
        $PostalCode = $request->postalcode;
        $Prefectures = $request->prefectures;
        $StreetAddress = $request->street_address;
        $AddressKana = $request->address_kana;
        //Article Section
        $PropertyName = $request->property_name;
        $IssueRoom = $request->issue_room;
        $PropertyNameKana = $request->property_name_kana;
        $FloorPlan = $request->floor_plan;
        $FloorPlanStatus = $request->floor_plan_status;
        $FloorPlanSize = $request->floor_plan_size;
        //Main Section
        $Deposit = $request->deposit;
        $LeaveAmortization = $request->leave_amortization;
        $Keymoney = $request->keymoney;
        $BeforeRent = $request->before_rent;
        $Rent = $request->rent;
        $AdminExpenses = $request->admin_expense;
        $ParkingFee = $request->parking_fee;
        $OtherExpenses = $request->other_expense;
        $Total = $request->total;

     /* Personal Information */
        //Current Address Section
        $AddressPostalCode = $request->address_postal_code;
        $AddressPrefectures = $request->address_prefecture;
        $AddressStreet = $request->address_street;
        $AddressStreetKana = $request->address_street_kana;
        //Main Section
        $AppLeaseName = $request->applicant_lessee_name;
        $AppLeaseNameKana = $request->applicant_lessee_name_kana;
        $AppLeaseSex = $request->appliacant_lessee_sex;
        $AppLeaseBirthYear = $request->applicant_lessee_birth_year;
        $AppLeaseBirthMonth = $request->applicant_lessee_birth_month;
        $AppLeaseBirthDate = $request->applicant_lessee_birth_date;
        $AppLeaseBirthOther = $request->applicant_lessee_birth_other;
        $AppLeaseFixedLinePhone = $request->applicant_lessee_fixed_line_phone;
        $AppLeaseMobilePhone = $request->applicant_lessee_mobile_phone;
        $AppLeaseEmail = $request->applicant_lessee_email;
        $AppLeaseFamilyStructure = $request->appliacant_lessee_family_structure;
        $AppLeaseFamilyStructureOther = $request->family_structured_other;
        //Current
        $CurrentType = $request->appliacant_lessee_type;
        $CurrentJoint = $request->appliacant_lessee_joint;
        //Main Section
        $AppMoveReason = $request->appliacant_lessee_move_reason;
        $AppMoveReasonOther = $request->movereason_other;
        $AppJobCategory = $request->appliacant_lessee_job_category;
        $AppJobOther = $request->job_category_other;
        $AppBusiness = $request->appliacant_lessee_business;
        $AppDriverLicense1 = $request->driver_licence_1;
        $AppDriverLicense2 = $request->driver_licence_2;
        $AppDriverLicense3 = $request->driver_licence_3;
        $AppCountryOfCitizenship = $request->country_of_citizenship;
        $AppRepaymentAmount = $request->repayment_amount;
        $AppResidenceYears = $request->residence_years;
        $AppResidentMonths = $request->residence_months;
        //Junkyard Section
        $AppJunkyardName = $request->junkyard_name;
        $AppJunkyardNameKana = $request->junkyard_name_kana;
        $AppJunkyardjunkyardPrefectures = $request->junkyard_prefecture;
        $AppJunkyardStreetAddress = $request->junkyard_street_address;
        $AppJunkyardAddressKana = $request->junkyard_address_kana;
        $AppJunkyardPhone = $request->junkyard_phone;
        $AppNumberofEmployee = $request->app_number_of_employee;
        $AppAnnualIncome = $request->annual_income;
        $AppMonthlyIncome = $request->monthly_income;
        $AppDepartment = $request->department;
        $AppPosition = $request->manager;
        $AppLengthofServiceYear = $request->length_of_service_year;
        $AppLengthofServiceMonth = $request->length_of_service_month;

      /* Emergency First Contact */
        //Current Address Section
        $EmerPostalCode = $request->emergency_address_postalcode;
        $EmerPrefectures = $request->emergency_address_prefecture;
        $EmerStreetAddress = $request->emergency_address_street;
        $EmerAddressKana = $request->emergency_address_street_kana;
        //Main Section
        $EmerName = $request->emergency_first_contact_name;
        $EmerSex = $request->emergency_first_contact_sex;
        $EmerBirthYear = $request->emergency_first_contact_birth_year;
        $EmerBirthMonth = $request->emergency_first_contact_birth_month;
        $EmerBirthDate = $request->emergency_first_contact_birth_date;
        $EmerBirthother = $request->emergency_first_contact_birth_other;
        $EmerFixedLinePhone = $request->efc_fixed_line_phone;
        //Junkyard Section
        $EmerJunkyardName = $request->efc_junkyard_name;
        $EmerJunkyardNameKana = $request->efc_junkyard_name_kana;
        $EmerAnnualIncome = $request->efc_annual_income;
        $EmerMonthlyIncome = $request->efc_monthly_income;
        $EmerEmergencyContact = $request->efc_emergency_contact;

      /* Resident */
        $ReRelationship = $request->resident_relationship;
        //1 Section
        $ReName1 = $request->re_name_1;
        $ReSex = $request->re_sex;
        $ReRelations1 = $request->re_relation_1;
        $ReBirthYear1 = $request->re_birth_year_1;
        $ReBirthMonth1 = $request->re_birth_month_1;
        $ReBirthDate1 = $request->re_birth_date_1;
        $ReMobile1 = $request->re_mobile_1;
        $ReAnnualIncome1 = $request->re_annual_income_1;
        $ReJunkyard1 = $request->re_junkyard_1;
        //2 Section
        $ReName2 = $request->re_name_2;
        $ReSex2 = $request->re_sex_2;
        $ReRelation2 = $request->re_relation_2;
        $ReBirthYear2 = $request->re_birth_year_2;
        $ReBirthMonth2 = $request->re_birth_month_2;
        $ReBirthDate2 = $request->re_birth_date_2;
        $ReMobile2 = $request->re_mobile_2;
        $ReAnnual2 = $request->re_annual_income_2;
        $ReJunkyard2 = $request->re_junkyard_2;
        //3 Section
        $ReName3 = $request->re_name_3;
        $ReSex3 = $request->re_sex_3;
        $ReRelation3 = $request->re_relation_3;
        $ReBirthYear3 = $request->re_birth_year_3;
        $ReBirthMonth3 = $request->re_birth_month_3;
        $ReBirthDate3 = $request->re_birth_date_3;
        $ReMobile3 = $request->re_mobile_3;
        $ReAnnualIncome3 = $request->re_annual_income_3;
        $ReJunkyard3 = $request->re_junkyard_3;

      /* Other */
        $OtherRemark = $request->other_remark;
        //Intermediary company
        $OtherCompanyName = $request->other_company_name;
        $OtherStreetAddress = $request->other_street_address;
        $OtherMobile = $request->other_mobile;
        $OtherFax = $request->other_fax;
        $OtherPersonInCharge = $request->other_person_incharge;


    	// DB::table('application_body')->insert(['postal_code'=>$PostalCode, 'prefecture'=>$Prefectures, 'address'=>$StreetAddress, 'address_kana'=>$AddressKana]);
      // echo "Done";

    }
}
