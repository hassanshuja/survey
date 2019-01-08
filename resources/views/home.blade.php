@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Select Questions</div>
                <div class="card-body questions">
                    <form action="{{ route('generateFile') }}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input type="email" name="client_email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        1.0 Identity of Persons Answering These Interrogatories
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_1_1" id="a" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="a"> 
                                            1.1 State the name, ADDRESS, telephone number, and
                                        relationship to you of each PERSON who prepared or
                                        assisted in the preparation of the responses to these
                                        interrogatories. (Do not identify anyone who simply typed or
                                        reproduced the responses.)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        2.0 General Background Information—individual
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_1" id="b" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="b"> 
                                            2.1 State:<br>
                                            (a) your name;<br>
                                            (b) every name you have used in the past; and
                                            (c) the dates you used each name.<br>
                                    </label>
                                </div>
                                 <div class="checkboxes col-md-6">
                                    <input name="check_2_8" id="2_8" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_8"> 
                                            2.8 Have you ever been convicted of a felony? If so, for
                                        each conviction state:<br>
                                        (a) the city and state where you were convicted;<br>
                                        (b) the date of conviction;<br>
                                        (c) the offense; and<br>
                                        (d) the court and case number.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_2" id="2_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_2"> 
                                            2.2 State the date and place of your birth.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_9" id="2_9" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_9"> 
                                        2.9 Can you speak English with ease? If not, what
                                        language and dialect do you normally use?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_3" id="2_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_3"> 
                                            2.3 At the time of the INCIDENT, did you have a driver's
                                            license? If so state:<br>
                                            (a) the state or other issuing entity<br>
                                            (b) the license number and type<br>
                                            (c) the date of issuance; and
                                            (d) all restrictions.<br>
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_10" id="2_10" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_10"> 
                                        2.10 Can you read and write English with ease? If not, what
                                        language and dialect do you normally use?
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_4" id="2_4" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_4"> 
                                           2.4 At the time of the INCIDENT, did you have any other
                                            permit or license for the operation of a motor vehicle? If so,
                                            state:<br>
                                            (a) the state or other issuing entity;<br>
                                            (b) the license number and type;<br>
                                            (c) the date of issuance; and
                                            (d) all restrictions.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_11" id="2_11" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-11" for="2_11"> 
                                        2.11 At the time of the INCIDENT were you acting as an
                                        agent or employee for any PERSON? If so, state:<br>
                                        (a) the name, ADDRESS, and telephone number of that
                                        PERSON: and<br>
                                        (b) a description of your duties.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_5" id="2_5" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_5"> 
                                            2.5 State:<br>
                                            (a) your present residence ADDRESS;<br>
                                            (b) your residence ADDRESSES for the past five years; and
                                            (c) the dates you lived at each ADDRESS.
                                    </label>
                                </div>
                            </div>
                            <div class="checkboxes col-md-6">
                                    <input name="check_2_12" id="2_12" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-11" for="2_12"> 
                                        2.12 At the time of the INCIDENT did you or any other
                                        person have any physical, emotional, or mental disability or
                                        condition that may have contributed to the occurrence of the
                                        INCIDENT? If so, for each person state:<br>
                                        (a) the name, ADDRESS, and telephone number;<br>
                                        (b) the nature of the disability or condition; and<br>
                                        (c) the manner in which the disability or condition<br>
                                        contributed to the occurrence of the INCIDENT.
                                    </label>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_6" id="2_6" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_6"> 
                                        2.6 State:
                                        (a) the name, ADDRESS, and telephone number of your
                                        present employer or place of self-employment; and <br>
                                        (b) the name, ADDRESS, dates of employment, job title,
                                        and nature of work for each employer or
                                        self-employment you have had from five years before
                                        the INCIDENT until today.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_13" id="2_13" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_13"> 
                                    2.13 Within 24 hours before the INCIDENT did you or any
                                    person involved in the INCIDENT use or take any of the
                                    following substances: alcoholic beverage, marijuana, or
                                    other drug or medication of any kind (prescription or not)? If
                                    so, for each person state:<br>
                                    (a) the name, ADDRESS, and telephone number;<br>
                                    (b) the nature or description of each substance;<br>
                                    (c) the quantity of each substance used or taken;<br>
                                    (d) the date and time of day when each substance was used
                                    or taken;<br>
                                    (e) the ADDRESS where each substance was used or
                                    taken;
                                    (f) the name, ADDRESS, and telephone number of each
                                    person who was present when each substance was used
                                    or taken; and<br>
                                    (g) the name, ADDRESS, and telephone number of any
                                    HEALTH CARE PROVIDER who prescribed or furnished
                                    the substance and the condition for which it was
                                    prescribed or furnished.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_2_7" id="2_7" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="2_7"> 
                                        2.7 State:
                                        (a) the name and ADDRESS of each school or other
                                        academic or vocational institution you have attended,
                                        beginning with high school;<br>
                                        (b) the dates you attended;<br>
                                        (c) the highest grade level you have completed; and
                                        (d) the degrees received.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        3.0 General Background Information—Business Entity
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_1" id="3_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_1"> 
                                    3.1 Are you a corporation? If so, state:
                                    (a) the name stated in the current articles of incorporation;
                                    (b) all other names used by the corporation during the past
                                    10 years and the dates each was used;
                                    (c) the date and place of incorporation;
                                    (d) the ADDRESS of the principal place of business; and
                                    (e) whether you are qualified to do business in California.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_5" id="3_5" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_5"> 
                                    3.5 Are you an unincorporated association?
                                    If so, state:<br>
                                    (a) the current unincorporated association name;<br>
                                    (b) all other names used by the unincorporated association
                                    during the past 10 years and the dates each was used;
                                    and<br>
                                    (c) the ADDRESS of the principal place of business.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_2" id="3_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_2"> 
                                    3.2 Are you a partnership? If so, state:<br>
                                    (a) the current partnership name;<br>
                                    (b) all other names used by the partnership during the past
                                    10 years and the dates each was used;<br>
                                    (c) whether you are a limited partnership and, if so, under
                                    the laws of what jurisdiction;<br>
                                    (d) the name and ADDRESS of each general partner; and<br>
                                    (e) the ADDRESS of the principal place of business.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_6" id="3_6" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_6"> 
                                    3.6 Have you done business under a fictitious name during
                                    the past 10 years? If so, for each fictitious name state:<br>
                                    (a) the name;<br>
                                    (b) the dates each was used;<br>
                                    (c) the state and county of each fictitious name filing; and<br>
                                    (d) the ADDRESS of the principal place of business.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_3" id="3_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_3"> 
                                   3.3 Are you a limited liability company? If so, state:<br>
                                (a) the name stated in the current articles of organization;<br>
                                (b) all other names used by the company during the past 10
                                years and the date each was used;<br>
                                (c) the date and place of filing of the articles of organization;
                                (d) the ADDRESS of the principal place of business; and<br>
                                (e) whether you are qualified to do business in California.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_7" id="3_7" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_7"> 
                                    3.7 Within the past five years has any public entity regis-
                                    tered or licensed your business? If so, for each license or
                                    registration:<br>
                                    (a) identify the license or registration;<br>
                                    (b) state the name of the public entity; and<br>
                                    (c) state the dates of issuance and expiration.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_3_4" id="3_4" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="3_4"> 
                                    3.4 Are you a joint venture? If so, state:<br>
                                    (a) the current joint venture name;<br>
                                    (b) all other names used by the joint venture during the
                                    past 10 years and the dates each was used;<br>
                                    (c) the name and ADDRESS of each joint venturer; and<br>
                                    (d) the ADDRESS of the principal place of business.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        4.0 Insurance
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_4_1" id="4_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="4_1"> 
                                    4.1 At the time of the INCIDENT, was there in effect any
                                    policy of insurance through which you were or might be
                                    insured in any manner (for example, primary, pro-rata, or
                                    excess liability coverage or medical expense coverage) for
                                    the damages, claims, or actions that have arisen out of the
                                    INCIDENT? If so, for each policy state:<br>
                                    (a) the kind of coverage;<br>
                                    (b) the name and ADDRESS of the insurance company;<br>
                                    (c) the name, ADDRESS, and telephone number of each
                                    named insured;<br>
                                    (d) the policy number;<br>
                                    (e) the limits of coverage for each type of coverage con-
                                    tained in the policy;<br>
                                    (f) whether any reservation of rights or controversy or
                                    coverage dispute exists between you and the insurance
                                    company; and<br>
                                    (g) the name, ADDRESS, and telephone number of the
                                    custodian of the policy.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_4_2" id="4_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="4_2"> 
                                    4.2 Are you self-insured under any statute for the damages,
                                    claims, or actions that have arisen out of the INCIDENT? If
                                    so, specify the statute.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        6.0 Physical, Mental, or Emotional Injuries
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_1" id="6_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_1"> 
                                    6.1 Do you attribute any physical, mental, or emotional
                                        injuries to the INCIDENT? (If your answer is “no,” do not
                                        answer interrogatories 6.2 through 6.7).
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_5" id="6_5" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_5"> 
                                   6.5 Have you taken any medication, prescribed or not, as a
                                    result of injuries that you attribute to the INCIDENT? If so,
                                    for each medication state:<br>
                                    (a) the name;<br>
                                    (b) the PERSON who prescribed or furnished it;<br>
                                    (c) the date it was prescribed or furnished;<br>
                                    (d) the dates you began and stopped taking it; and<br>
                                    (e) the cost to date.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_2" id="6_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_2"> 
                                    6.2 Identify each injury you attribute to the INCIDENT and
                                    the area of your body affected.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_6" id="6_6" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_6"> 
                                    6.6 Are there any other medical services necessitated by
                                    the injuries that you attribute to the INCIDENT that were not
                                    previously listed (for example, ambulance, nursing,
                                    prosthetics)? If so, for each service state:<br>
                                    (a) the nature;<br>
                                    (b) the date;<br>
                                    (c) the cost; and<br>
                                    (d) the name, ADDRESS, and telephone number<br>
                                    of each provider.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_3" id="6_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_3"> 
                                    6.3 Do you still have any complaints that you attribute to
                                    the INCIDENT? If so, for each complaint state:
                                    (a) a description;
                                    (b) whether the complaint is subsiding, remaining the same,
                                    or becoming worse; and
                                    (c) the frequency and duration.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_7" id="6_7" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_7"> 
                                    6.7 Has any HEALTH CARE PROVIDER advised that you
                                    may require future or additional treatment for any injuries
                                    that you attribute to the INCIDENT? If so, for each injury
                                    state:<br>
                                    (a) the name and ADDRESS of each HEALTH CARE
                                    PROVIDER;<br>
                                    (b) the complaints for which the treatment was advised; and<br>
                                    (c) the nature, duration, and estimated cost of the
                                    treatment.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_6_4" id="6_4" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="6_4"> 
                                    6.4 Did you receive any consultation or examination
                                    (except from expert witnesses covered by Code of Civil
                                    Procedure sections 2034.210–2034.310) or treatment from a
                                    HEALTH CARE PROVIDER for any injury you attribute to
                                    the INCIDENT? If so, for each HEALTH CARE PROVIDER
                                    state:<br>
                                    (a) the name, ADDRESS, and telephone number;<br>
                                    (b) the type of consultation, examination, or treatment
                                    provided;<br>
                                    (c) the dates you received consultation, examination, or
                                    treatment; and<br>
                                    (d) the charges to date.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        7.0 Property Damage
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_7_1" id="7_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="7_1"> 
                                    7.1 Do you attribute any loss of or damage to a vehicle or
                                    other property to the INCIDENT? If so, for each item of
                                    property:<br>
                                    (a) describe the property;<br>
                                    (b) describe the nature and location of the damage to the
                                    property;<br>
                                    (c) state the amount of damage you are claiming for each
                                    item of property and how the amount was calculated; and<br>
                                    (d) if the property was sold, state the name, ADDRESS, and
                                    telephone number of the seller, the date of sale, and the
                                    sale price.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_7_2" id="7_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="7_2"> 
                                    7.2 Has a written estimate or evaluation been made for any
                                    item of property referred to in your answer to the preceding
                                    interrogatory? If so, for each estimate or evaluation state:
                                    (a) the name, ADDRESS, and telephone number of the
                                    PERSON who prepared it and the date prepared;
                                    (b) the name, ADDRESS, and telephone number of each
                                    PERSON who has a copy of it; and
                                    (c) the amount of damage stated.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_7_3" id="7_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="7_3"> 
                                    7.3 Has any item of property referred to in your answer to
                                    interrogatory 7.1 been repaired? If so, for each item state:
                                    (a) the date repaired;<br>
                                    (b) a description of the repair;<br>
                                    (c) the repair cost;<br>
                                    (d) the name, ADDRESS, and telephone number of the
                                    PERSON who repaired it;<br>
                                    (e) the name, ADDRESS, and telephone number of the
                                    PERSON who paid for the repair.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                        8.0 Loss of Income or Earning Capacity
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_1" id="8_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_1"> 
                                    8.1 Do you attribute any loss of income or earning capacity
                                    to the INCIDENT? (If your answer is “no,” do not answer
                                    interrogatories 8.2 through 8.8).
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_5" id="8_5" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_5"> 
                                    8.5 State the date you returned to work at each place of
                                    employment following the INCIDENT.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_2" id="8_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_2"> 
                                    8.2 State:<br>
                                    (a)the nature of your work<br>
                                    (b)your job title at the time of the INCIDENT; and<br>
                                    (c)the date your employment began.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_6" id="8_6" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_6"> 
                                    8.6  State the dates you did not work and for which you lost income as a result of the INCIDENT. </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_3" id="8_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_3"> 
                                    8.3  State the last date before the INCIDENT that you  worked for compensation.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_7" id="8_7" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_7"> 
                                    8.7  State the total income you have lost to date as a result  of the INCIDENT and how the amount was calculated.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_8_4" id="8_4" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="8_4"> 
                                    8.4  State your monthly income at the time of the INCIDENT and how the amount was calculated.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                    9.0  Other Damages
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_9_1" id="9_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="9_1"> 
                                    9.1   Are there any other  damages  that you  attribute  to  the INCIDENT? If so, for each item of damage state: <br>
                                    (a)  the nature;<br>
                                    (b)  the date it occurred;<br>
                                    (c)  the amount; and<br>
                                    (d)  the name,  ADDRESS,  and  telephone  number  of  each        PERSON to whom an obligation was incurred.
                                     </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_9_2" id="9_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="9_2"> 
                                    9.2  Do any DOCUMENTS support the existence or amount of any item of damages claimed in interrogatory 9.1? If so, describe each document and state the name, ADDRESS, and telephone number of the PERSON who has each DOCUMENT.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                    10.0  Medical History 
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_10_1" id="10_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="10_1"> 
                                   10.1  At any time before the INCIDENT did you have  complaints or injuries that involved the same part of your body claimed to have been injured in the INCIDENT? If so, for each state:<br>
                                   (a)  a description of the complaint or injury;<br>
                                    (b)  the dates it began and ended; and <br>
                                    (c)  the name,  ADDRESS,  and  telephone  number  of  each HEALTH CARE PROVIDER whom you consulted or  who examined or treated you.
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_10_2" id="10_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="10_2"> 
                                    10.2  List all physical, mental , and emotional disabilities you had immediately before the INCIDENT.  (You may omit mental or emotional disabilities unless you attribute any mental or emotional injury to the INCIDENT.)
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_10_3" id="10_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="10_3"> 
                                    10.3  At any time after the INCIDENT, did you sustain  injuries of the kind for which you are now claiming  damages? If so, for each incident giving rise to an injury state:<br>
                                    (a)  the date and the place it occurred;<br>
                                    (b)  the name, ADDRESS, and telephone number of any other PERSON involved;<br>
                                    (c)  the nature of any injuries you sustained; <br>
                                    (d)  the name,  ADDRESS,  and  telephone  number  of  each HEALTH CARE PROVIDER who you consulted or who examined or treated you; and<br>
                                    (e)  the nature of the treatment and its duration.  
                                    </label>
                                </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                    11.0  Other Claims and Previous Claims
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_11_1" id="11_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="11_1"> 
                                    11.1  Except for this action, in the past 10 years have you filed an action or made a written claim or demand for compensation for your personal injuries? If so, for each action, claim, or demand state:<br>
                                    (a)  the  date,  time,  and  place  and  location  (closest  street ADDRESS or intersection) of the INCIDENT  giving  rise to the action, claim, or demand;<br>
                                    (b)  the name,  ADDRESS,  and  telephone  number  of  each PERSON against whom the claim or demand was made or the action filed; <br>
                                    (c)  the court, names of the parties, and case number  of  any action filed;<br>
                                    (d)  the  name,  ADDRESS,  and  telephone  number  of  any attorney representing you;<br>
                                    (e)  whether  the  claim  or  action  has  been  resolved  or  is pending; and<br>
                                    (f)   a description of the injury
                                 </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_11_2" id="11_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="11_2"> 
                                    11.2 In the past 10 years have you made a written claim or demand for workers' compensation benefits? If so, for each claim or demand state:<br>
                                    (a)  the date, time, and place of the INCIDENT giving  rise  to the claim;
                                    (b)  the name, ADDRESS, and telephone number of your employer at the time of the injury;<br>
                                    (c) the name, ADDRESS, and telephone number of the workers’ compensation insurer and the claim number; <br>
                                    (d)  the period of  time  during  which  you  received  workers’ compensation benefits; <br>
                                    (e)  a description of the injury;<br>
                                    (f) the name, ADDRESS, and telephone number of any HEALTH CARE PROVIDER who provided services; and <br>
                                    (g)  the case number at the Workers’ Compensation Appeals Board.

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                    12.0  Investigation—General
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_1" id="12_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_1"> 
                                    12.1 State the name, ADDRESS, and telephone number of each individual: <br>
                                    (a)  who witnessed the  INCIDENT  or  the  events occurring immediately before or after the INCIDENT; <br>
                                    (b)  who made any statement at the scene of the INCIDENT;<br>
                                    (c)  who heard any statements made about the INCIDENT by any individual at the scene; and<br>
                                    (d)  who YOU OR ANYONE  ACTING  ON  YOUR  BEHALF claim has knowledge of the INCIDENT (except for  expert witnesses covered by Code of Civil Procedure section 2034). 
                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_5" id="12_5" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_5"> 
                                    12.5  Do YOU OR ANYONE ACTING ON YOUR BEHALF know of any diagram, reproduction, or model of any place or thing (except for items developed by expert witnesses covered by Code of Civil Procedure sections 2034.210– 2034.310) concerning the INCIDENT? If so, for each item state: <br>
                                    (a)  the type (i.e., diagram, reproduction, or model);<br>
                                    (b)  the subject matter; and<br>
                                    (c)  the  name,  ADDRESS,  and  telephone  number of  each      PERSON who has it.


                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_2" id="12_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_2"> 
                                    12.2  Have YOU OR ANYONE ACTING ON YOUR  BEHALF interviewed any individual concerning the INCIDENT? If so, for each individual state:<br> 
                                    (a)  the  name,  ADDRESS,  and  telephone  number  of   the individual interviewed; <br>
                                    (b)  the date of the interview; and<br>
                                     (c)  the  name,  ADDRESS,  and  telephone  number  of   the      PERSON who conducted the interview                                </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_6" id="12_6" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_6"> 
                                    12.6  Was a report made by any PERSON concerning the INCIDENT? If so, state:<br>
                                    (a)  the name,  title,  identification  number,  and  employer  of      the PERSON who made the report;<br>
                                    (b)  the date and type of report made;<br>
                                    (c)  the  name,  ADDRESS,  and  telephone   number  of   the      PERSON for whom the report was made; and<br>
                                    (d)  the name,  ADDRESS,  and   telephone  number  of each      PERSON who has the original or a copy of the report.

                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_3" id="12_3" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_3"> 
                                    12.3    Have YOU  OR  ANYONE  ACTING  ON  YOUR BEHALF obtained a written or recorded statement from any individual concerning the INCIDENT? If so, for each statement state:<br>
                                    (a)  the  name,  ADDRESS,  and  telephone  number  of   the      individual from whom the statement was obtained;<br>
                                    (b)  the  name,  ADDRESS,  and  telephone  number  of   the      individual who obtained the statement;<br>
                                    (c)  the date the statement was obtained; and <br>
                                    (d)  the  name, ADDRESS, and  telephone  number  of  each         PERSON who has the original statement or a copy.


                                    </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_7" id="12_7" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_7"> 
                                    12.7 Have YOU OR ANYONE ACTING ON YOUR  BEHALF inspected the scene of the INCIDENT? If so, for each inspection state:<br>
                                    (a)  the  name,  ADDRESS,  and  telephone   number  of   the individual making the inspection (except for expert witnesses covered  by  Code of  Civil  Procedure  sections 2034.210–2034.310); and <br>
                                    (b)  the date of the inspection.
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input name="check_12_4" id="12_4" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="12_4"> 
                                    12.4   Do YOU OR ANYONE ACTING ON YOUR BEHALF know of any photographs, films, or videotapes depicting any place, object, or individual concerning the INCIDENT or plaintiff's injuries? If so, state: <br>
                                    (a)  the number of photographs or feet of film or videotape; <br>
                                    (b)  the places, objects, or persons  photographed,  filmed,  or      videotaped; <br>
                                    (c)  the  date  the  photographs,  films,   or   videotapes   were      taken;<br>
                                    (d)  the  name,  ADDRESS,  and   telephone  number  of   the individual taking the photographs, films or videotapes and; <br>
                                    (e)  the name,  ADDRESS,  and  telephone  number  of  each PERSON who has the original or a copy of the photographs, films, or videotapes.

                                    </label>
                                </div>
                            </div>
                        </div>






                        <div class="row">
                            <div class="col">  
                                <label for="one">
                                    <span class="headings">
                                    13.0  Investigation—Surveillance
                                    </span>
                                </label>
                                <div class="checkboxes col-md-6">
                                    <input name="check_13_1" id="13_1" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="13_1"> 
                                    13.1  Have YOU OR ANYONE ACTING ON YOUR BEHALF conducted surveillance of any individual involved in the INCIDENT or any party to this action? If so, for each sur- veillance state:<br>
                                    (a)  the  name,  ADDRESS,  and  telephone  number   of   the      individual or party;<br>
                                    (b)  the time, date, and place of the surveillance;<br>
                                     (c)  the   name,  ADDRESS,  and   telephone  number  of  the      individual who conducted the surveillance; and <br>
                                    (d)  the name,  ADDRESS,  and  telephone  number  of  each PERSON who has the original or a copy of any surveillance photograph, film, or videotape.

                                 </label>
                                </div>
                                <div class="checkboxes col-md-6">
                                    <input name="check_13_2" id="13_2" type="checkbox" tabindex="1"/>
                                    <label class="green-background col-md-12" for="11_2"> 
                                    13.2 In the past 10 years have you made a written claim or demand for workers' compensation benefits? If so, for each claim or demand state:<br>
                                    (a)  the date, time, and place of the INCIDENT giving  rise  to the claim;
                                    (b)  the name, ADDRESS, and telephone number of your employer at the time of the injury;<br>
                                    (c) the name, ADDRESS, and telephone number of the workers’ compensation insurer and the claim number; <br>
                                    (d)  the period of  time  during  which  you  received  workers’ compensation benefits; <br>
                                    (e)  a description of the injury;<br>
                                    (f) the name, ADDRESS, and telephone number of any HEALTH CARE PROVIDER who provided services; and <br>
                                    (g)  the case number at the Workers’ Compensation Appeals Board.

                                    </label>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <input required type="email" name="client_email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">  
                                <div class="checkboxes col-md-6">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
