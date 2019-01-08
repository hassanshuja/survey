<?php

use Illuminate\Database\Seeder;
use App\Question;
class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = new Question();
     	$question->create([
            'q_no'     => '1_1',
            'question' => 'State the name, ADDRESS, telephone number, and
							relationship to you of each PERSON who prepared or
							assisted in the preparation of the responses to these
							interrogatories. (Do not identify anyone who simply typed or
							reproduced the responses.)'
        ]);
        $question->create([
            'q_no'     => '2_1',
            'question' => 'State:<br>
	                        (a) your name;<br>
	                        (b) every name you have used in the past; and
	                        (c) the dates you used each name.<br>'
        ]);
        $question->create([
            'q_no'     => '2_2',
            'question' => 'State the date and place of your birth.'
        ]);
        $question->create([
            'q_no'     => '2_3',
            'question' => 'At the time of the INCIDENT, did you have a driver\'s
                                        license? If so state:<br>
                                        (a) the state or other issuing entity<br>
                                        (b) the license number and type<br>
                                        (c) the date of issuance; and
                                        (d) all restrictions.<br>'
        ]);
        $question->create([
            'q_no'     => '2_4',
            'question' => 'At the time of the INCIDENT, did you have any other
                            permit or license for the operation of a motor vehicle? If so,
                            state:<br>
                            (a) the state or other issuing entity;<br>
                            (b) the license number and type;<br>
                            (c) the date of issuance; and
                            (d) all restrictions.'
        ]);
        $question->create([
            'q_no'     => '2_5',
            'question' => 'State:<br>
                            (a) your present residence ADDRESS;<br>
                            (b) your residence ADDRESSES for the past five years; and
                            (c) the dates you lived at each ADDRESS.'
        ]);
        $question->create([
            'q_no'     => '2_6',
            'question' => 'State:
                            (a) the name, ADDRESS, and telephone number of your
                            present employer or place of self-employment; and <br>
                            (b) the name, ADDRESS, dates of employment, job title,
                            and nature of work for each employer or
                            self-employment you have had from five years before
                            the INCIDENT until today.'
        ]);
        $question->create([
            'q_no'     => '2_7',
            'question' => ' State:
                            (a) the name and ADDRESS of each school or other
                            academic or vocational institution you have attended,
                            beginning with high school;<br>
                            (b) the dates you attended;<br>
                            (c) the highest grade level you have completed; and
                            (d) the degrees received.'
        ]);
        $question->create([
            'q_no'     => '2_8',
            'question' => 'Have you ever been convicted of a felony? If so, for
                            each conviction state:<br>
                            (a) the city and state where you were convicted;<br>
                            (b) the date of conviction;<br>
                            (c) the offense; and<br>
                            (d) the court and case number.'
        ]);
        $question->create([
            'q_no'     => '2_9',
            'question' => 'Can you speak English with ease? If not, what
                            language and dialect do you normally use?'
        ]);
        $question->create([
            'q_no'     => '2_10',
            'question' => 'Can you read and write English with ease? If not, what
                    		language and dialect do you normally use?'
        ]);
        $question->create([
            'q_no'     => '2_11',
            'question' => 'At the time of the INCIDENT were you acting as an
                            agent or employee for any PERSON? If so, state:<br>
                            (a) the name, ADDRESS, and telephone number of that
                            PERSON: and<br>
                            (b) a description of your duties.'
        ]);
        $question->create([
            'q_no'     => '2_12',
            'question' => 'At the time of the INCIDENT did you or any other
                            person have any physical, emotional, or mental disability or
                            condition that may have contributed to the occurrence of the
                            INCIDENT? If so, for each person state:<br>
                            (a) the name, ADDRESS, and telephone number;<br>
                            (b) the nature of the disability or condition; and<br>
                            (c) the manner in which the disability or condition<br>
                            contributed to the occurrence of the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '2_13',
            'question' => 'Within 24 hours before the INCIDENT did you or any
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
                            prescribed or furnished.'
        ]);
        $question->create([
            'q_no'     => '3_1',
            'question' => 'Are you a corporation? If so, state:
                                (a) the name stated in the current articles of incorporation; <br>
                                (b) all other names used by the corporation during the past 
                                10 years and the dates each was used; <br>
                                (c) the date and place of incorporation; <br>
                                (d) the ADDRESS of the principal place of business; and <br>
                                (e) whether you are qualified to do business in California.'
        ]);
        $question->create([
            'q_no'     => '3_2',
            'question' => 'Are you a partnership? If so, state:<br>
                            (a) the current partnership name;<br>
                            (b) all other names used by the partnership during the past
                            10 years and the dates each was used;<br>
                            (c) whether you are a limited partnership and, if so, under
                            the laws of what jurisdiction;<br>
                            (d) the name and ADDRESS of each general partner; and<br>
                            (e) the ADDRESS of the principal place of business.'
        ]);
        $question->create([
            'q_no'     => '3_3',
            'question' => 'Are you a limited liability company? If so, state:<br>
                            (a) the name stated in the current articles of organization;<br>
                            (b) all other names used by the company during the past 10
                            years and the date each was used;<br>
                            (c) the date and place of filing of the articles of organization;
                            (d) the ADDRESS of the principal place of business; and<br>
                            (e) whether you are qualified to do business in California.'
        ]);
        $question->create([
            'q_no'     => '3_4',
            'question' => 'Are you a joint venture? If so, state:<br>
                                (a) the current joint venture name;<br>
                                (b) all other names used by the joint venture during the
                                past 10 years and the dates each was used;<br>
                                (c) the name and ADDRESS of each joint venturer; and<br>
                                (d) the ADDRESS of the principal place of business.'
        ]);
        $question->create([
            'q_no'     => '3_5',
            'question' => 'Are you an unincorporated association?
                                If so, state:<br>
                                (a) the current unincorporated association name;<br>
                                (b) all other names used by the unincorporated association
                                during the past 10 years and the dates each was used;
                                and<br>
                                (c) the ADDRESS of the principal place of business.'
        ]);
        $question->create([
            'q_no'     => '3_6',
            'question' => 'Have you done business under a fictitious name during
                                the past 10 years? If so, for each fictitious name state:<br>
                                (a) the name;<br>
                                (b) the dates each was used;<br>
                                (c) the state and county of each fictitious name filing; and<br>
                                (d) the ADDRESS of the principal place of business.'
        ]);
        $question->create([
            'q_no'     => '3_7',
            'question' => 'Within the past five years has any public entity regis-
                                tered or licensed your business? If so, for each license or
                                registration:<br>
                                (a) identify the license or registration;<br>
                                (b) state the name of the public entity; and<br>
                                (c) state the dates of issuance and expiration.'
        ]);
        $question->create([
            'q_no'     => '4_1',
            'question' => ' At the time of the INCIDENT, was there in effect any
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
                                custodian of the policy.'
        ]);
        $question->create([
            'q_no'     => '4_2',
            'question' => 'Are you self-insured under any statute for the damages,
                                claims, or actions that have arisen out of the INCIDENT? If
                                so, specify the statute.'
        ]);
        $question->create([
            'q_no'     => '6_1',
            'question' => 'Do you attribute any physical, mental, or emotional
                                    injuries to the INCIDENT? (If your answer is “no,” do not
                                    answer interrogatories 6.2 through 6.7).'
        ]);
        $question->create([
            'q_no'     => '6_2',
            'question' => 'Identify each injury you attribute to the INCIDENT and
                                the area of your body affected.'
        ]);
        $question->create([
            'q_no'     => '6_3',
            'question' => 'Do you still have any complaints that you attribute to
                                the INCIDENT? If so, for each complaint state:
                                (a) a description;
                                (b) whether the complaint is subsiding, remaining the same,
                                or becoming worse; and
                                (c) the frequency and duration.'
        ]);
        $question->create([
            'q_no'     => '6_4',
            'question' => 'Did you receive any consultation or examination
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
                                (d) the charges to date.'
        ]);
        $question->create([
            'q_no'     => '6_5',
            'question' => 'Have you taken any medication, prescribed or not, as a
                                result of injuries that you attribute to the INCIDENT? If so,
                                for each medication state:<br>
                                (a) the name;<br>
                                (b) the PERSON who prescribed or furnished it;<br>
                                (c) the date it was prescribed or furnished;<br>
                                (d) the dates you began and stopped taking it; and<br>
                                (e) the cost to date.'
        ]);
        $question->create([
            'q_no'     => '6_6',
            'question' => 'Are there any other medical services necessitated by
                                the injuries that you attribute to the INCIDENT that were not
                                previously listed (for example, ambulance, nursing,
                                prosthetics)? If so, for each service state:<br>
                                (a) the nature;<br>
                                (b) the date;<br>
                                (c) the cost; and<br>
                                (d) the name, ADDRESS, and telephone number<br>
                                of each provider.'
        ]);
        $question->create([
            'q_no'     => '6_7',
            'question' => 'Has any HEALTH CARE PROVIDER advised that you
                                may require future or additional treatment for any injuries
                                that you attribute to the INCIDENT? If so, for each injury
                                state:<br>
                                (a) the name and ADDRESS of each HEALTH CARE
                                PROVIDER;<br>
                                (b) the complaints for which the treatment was advised; and<br>
                                (c) the nature, duration, and estimated cost of the
                                treatment.'
        ]);
        $question->create([
            'q_no'     => '7_1',
            'question' => 'Do you attribute any loss of or damage to a vehicle or
                                other property to the INCIDENT? If so, for each item of
                                property:<br>
                                (a) describe the property;<br>
                                (b) describe the nature and location of the damage to the
                                property;<br>
                                (c) state the amount of damage you are claiming for each
                                item of property and how the amount was calculated; and<br>
                                (d) if the property was sold, state the name, ADDRESS, and
                                telephone number of the seller, the date of sale, and the
                                sale price.'
        ]);
        $question->create([
            'q_no'     => '7_2',
            'question' => 'Has a written estimate or evaluation been made for any
                                item of property referred to in your answer to the preceding
                                interrogatory? If so, for each estimate or evaluation state:
                                (a) the name, ADDRESS, and telephone number of the
                                PERSON who prepared it and the date prepared;
                                (b) the name, ADDRESS, and telephone number of each
                                PERSON who has a copy of it; and
                                (c) the amount of damage stated.'
        ]);
        $question->create([
            'q_no'     => '7_3',
            'question' => 'Has any item of property referred to in your answer to
                                interrogatory 7_1 been repaired? If so, for each item state:
                                (a) the date repaired;<br>
                                (b) a description of the repair;<br>
                                (c) the repair cost;<br>
                                (d) the name, ADDRESS, and telephone number of the
                                PERSON who repaired it;<br>
                                (e) the name, ADDRESS, and telephone number of the
                                PERSON who paid for the repair.'
        ]);
        $question->create([
            'q_no'     => '8_1',
            'question' => 'Do you attribute any loss of income or earning capacity
                                to the INCIDENT? (If your answer is “no,” do not answer
                                interrogatories 8.2 through 8.8).'
        ]);
        $question->create([
            'q_no'     => '8_2',
            'question' => 'State:<br>
                                (a)the nature of your work<br>
                                (b)your job title at the time of the INCIDENT; and<br>
                                (c)the date your employment began.'
        ]);
        $question->create([
            'q_no'     => '8_3',
            'question' => 'State the last date before the INCIDENT that you  worked for compensation.'
        ]);
        $question->create([
            'q_no'     => '8_4',
            'question' => 'State your monthly income at the time of the INCIDENT and how the amount was calculated.'
        ]);
        $question->create([
            'q_no'     => '8_5',
            'question' => 'State the date you returned to work at each place of
                                employment following the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '8_6',
            'question' => 'State the dates you did not work and for which you lost income as a result of the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '8_7',
            'question' => 'State the total income you have lost to date as a result  of the INCIDENT and how the amount was calculated.'
        ]);
        $question->create([
            'q_no'     => '8_8',
            'question' => 'Will you lose income in the future as a result of the
							INCIDENT? If so, state: <br>
							(a) the facts upon which you base this contention; <br>
							(b) an estimate of the amount; <br>
							(c) an estimate of how long you will be unable to work; and <br>
							(d) how the claim for future income is calculated.' 
        ]);
        $question->create([
            'q_no'     => '9_1',
            'question' => 'Are there any other damages that you attribute to the
							INCIDENT? If so, for each item of damage state: <br>
							(a) the nature; <br>
							(b) the date it occurred; <br>
							(c) the amount; and <br>
							(d) the name, ADDRESS, and telephone number of each
							PERSON to whom an obligation was incurred.'
        ]);
        $question->create([
            'q_no'     => '9_2',
            'question' => 'Can you speak English with ease? If not, what
                            language and dialect do you normally use?'
        ]);
        $question->create([
            'q_no'     => '10_1',
            'question' => 'At any time before the INCIDENT did you have com-
							plaints or injuries that involved the same part of your body
							claimed to have been injured in the INCIDENT? If so, for
							each state: <br>
							(a) a description of the complaint or injury; <br>
							(b) the dates it began and ended; and <br>
							(c) the name, ADDRESS, and telephone number of each <br>
							HEALTH CARE PROVIDER whom you consulted or
							who examined or treated you.'
        ]);
        $question->create([
            'q_no'     => '10_2',
            'question' => 'List all physical, mental, and emotional disabilities you
							had immediately before the INCIDENT. (You may omit
							mental or emotional disabilities unless you attribute any
							mental or emotional injury to the INCIDENT.)'
        ]);
        $question->create([
            'q_no'     => '10_3',
            'question' => 'At any time after the INCIDENT, did you sustain
							injuries of the kind for which you are now claiming
							damages? If so, for each incident giving rise to an injury
							state: <br>
							(a) the date and the place it occurred; <br>
							(b) the name, ADDRESS, and telephone number of any
							other PERSON involved; <br>
							(c) the nature of any injuries you sustained; <br>
							(d) the name, ADDRESS, and telephone number of each
							HEALTH CARE PROVIDER who you consulted or who
							examined or treated you; and <br>
							(e) the nature of the treatment and its duration.'
        ]);
        $question->create([
            'q_no'     => '11_1',
            'question' => 'Except for this action, in the past 10 years have you
							filed an action or made a written claim or demand for
							compensation for your personal injuries? If so, for each
							action, claim, or demand state: <br>
							(a) the date, time, and place and location (closest street
							ADDRESS or intersection) of the INCIDENT giving rise
							to the action, claim, or demand; <br>
							(b) the name, ADDRESS, and telephone number of each
							PERSON against whom the claim or demand was made
							or the action filed; <br>
							(c) the court, names of the parties, and case number of any
							action filed; <br>
							(d) the name, ADDRESS, and telephone number of any
							attorney representing you; <br>
							(e) whether the claim or action has been resolved or is
							pending; and <br>
							(f) a description of the injury.'
        ]);
        $question->create([
            'q_no'     => '11_2',
            'question' => 'In the past 10 years have you made a written claim or
							demand for workers\' compensation benefits? If so, for each
							claim or demand state: <br>
							(a) the date, time, and place of the INCIDENT giving rise to
							the claim; <br>
							(b) the name, ADDRESS, and telephone number of your
							employer at the time of the injury; <br>
							(c) the name, ADDRESS, and telephone number of the
							workers’ compensation insurer and the claim number; <br>
							(d) the period of time during which you received workers’
							compensation benefits; <br>
							(e) a description of the injury;
							(f) the name, ADDRESS, and telephone number of any
							HEALTH CARE PROVIDER who provided services; and
							(g) the case number at the Workers’ Compensation Appeals
							Board. <br>'
        ]);
        $question->create([
            'q_no'     => '12_1',
            'question' => 'State the name, ADDRESS, and telephone number of each individual: <br>
                            (a)  who witnessed the  INCIDENT  or  the  events occurring immediately before or after the INCIDENT; <br>
                            (b)  who made any statement at the scene of the INCIDENT;<br>
                            (c)  who heard any statements made about the INCIDENT by any individual at the scene; and<br>
                            (d)  who YOU OR ANYONE  ACTING  ON  YOUR  BEHALF claim has knowledge of the INCIDENT (except for  expert witnesses covered by Code of Civil Procedure section 2034)'
        ]);
        $question->create([
            'q_no'     => '12_2',
            'question' => ' Have YOU OR ANYONE ACTING ON YOUR  BEHALF interviewed any individual concerning the INCIDENT? If so, for each 		individual state:<br> 
                            (a)  the  name,  ADDRESS,  and  telephone  number  of   the individual interviewed; <br>
                            (b)  the date of the interview; and<br>
                             (c)  the  name,  ADDRESS,  and  telephone  number  of   the      PERSON who conducted the interview'
        ]);
        $question->create([
            'q_no'     => '12_3',
            'question' => 'Have YOU  OR  ANYONE  ACTING  ON  YOUR BEHALF obtained a written or recorded statement from any individual concerning the INCIDENT? If so, for each statement state:<br>
                                (a) the  name, ADDRESS, and  telephone  number of the individual from whom the statement was obtained;<br>
                                (b) the  name, ADDRESS, and  telephone  number of the individual who obtained the statement;<br>
                                (c) the date the statement was obtained; and <br>
                                (d) the  name, ADDRESS, and telephone number of each PERSON who has the original statement or a copy.
'
        ]);
        $question->create([
            'q_no'     => '12_4',
            'question' => 'Do YOU OR ANYONE ACTING ON YOUR BEHALF know of any photographs, films, or videotapes depicting any place, object, or 	individual concerning the INCIDENT or plaintiff\'s injuries? If so, state: <br>
                        (a)  the number of photographs or feet of film or videotape; <br>
                        (b)  the places, objects, or persons  photographed,  filmed,  or      videotaped; <br>
                        (c)  the  date  the  photographs,  films,   or   videotapes   were      taken;<br>
                        (d)  the  name,  ADDRESS,  and   telephone  number  of   the individual taking the photographs, films or videotapes and; <br>
                        (e)  the name,  ADDRESS,  and  telephone  number  of  each PERSON who has the original or a copy of the photographs, films, or videotapes.'
        ]);
        $question->create([
            'q_no'     => '12_5',
            'question' => 'Do YOU OR ANYONE ACTING ON YOUR BEHALF know of any diagram, reproduction, or model of any place or thing (except for 			items developed by expert witnesses covered by Code of Civil Procedure sections 2034.210– 2034.310) concerning the INCIDENT? If so, for each item state: <br>
                            (a)  the type (i.e., diagram, reproduction, or model);<br>
                            (b)  the subject matter; and<br>
                            (c)  the  name,  ADDRESS,  and  telephone  number of  each      PERSON who has it.'
        ]);
        $question->create([
            'q_no'     => '12_6',
            'question' => 'Was a report made by any PERSON concerning the INCIDENT? If so, state:<br>
                            (a)  the name,  title,  identification  number,  and  employer  of      the PERSON who made the report;<br>
                            (b)  the date and type of report made;<br>
                            (c)  the  name,  ADDRESS,  and  telephone   number  of   the      PERSON for whom the report was made; and<br>
                            (d)  the name,  ADDRESS,  and   telephone  number  of each      PERSON who has the original or a copy of the report.'
        ]);
        $question->create([
            'q_no'     => '12_7',
            'question' => 'Have YOU OR ANYONE ACTING ON YOUR  BEHALF inspected the scene of the INCIDENT? If so, for each inspection state:<br>
                            (a)  the  name,  ADDRESS,  and  telephone   number  of   the individual making the inspection (except for expert witnesses covered  by  Code of  Civil  Procedure  sections 2034.210–2034.310); and <br>
                            (b)  the date of the inspection.'
        ]);
        $question->create([
            'q_no'     => '13_1',
            'question' => 'Have YOU OR ANYONE ACTING ON YOUR BEHALF conducted surveillance of any individual involved in the INCIDENT or any party to this action? If so, for each sur- veillance state:<br>
                        (a)  the  name,  ADDRESS,  and  telephone  number   of   the      individual or party;<br>
                        (b)  the time, date, and place of the surveillance;<br>
                         (c)  the   name,  ADDRESS,  and   telephone  number  of  the      individual who conducted the surveillance; and <br>
                        (d)  the name,  ADDRESS,  and  telephone  number  of  each PERSON who has the original or a copy of any surveillance photograph, film, or videotape.'
        ]);
        $question->create([
            'q_no'     => '13_2',
            'question' => 'In the past 10 years have you made a written claim or demand for workers\' compensation benefits? If so, for each claim or demand state:<br>
                                (a)  the date, time, and place of the INCIDENT giving  rise  to the claim;
                                (b)  the name, ADDRESS, and telephone number of your employer at the time of the injury;<br>
                                (c) the name, ADDRESS, and telephone number of the workers’ compensation insurer and the claim number; <br>
                                (d)  the period of  time  during  which  you  received  workers’ compensation benefits; <br>
                                (e)  a description of the injury;<br>
                                (f) the name, ADDRESS, and telephone number of any HEALTH CARE PROVIDER who provided services; and <br>
                                (g)  the case number at the Workers’ Compensation Appeals Board.'
        ]);
        $question->create([
            'q_no'     => '14_1',
            'question' => 'Do YOU OR ANYONE ACTING ON YOUR BEHALF
							contend that any PERSON involved in the INCIDENT
							violated any statute, ordinance, or regulation and that the
							violation was a legal (proximate) cause of the INCIDENT? If
							so, identify the name, ADDRESS, and telephone number of
							each PERSON and the statute, ordinance, or regulation that
							was violated'
        ]);
        $question->create([
            'q_no'     => '14_2',
            'question' => 'Was any PERSON cited or charged with a violation of
							any statute, ordinance, or regulation as a result of this
							INCIDENT? If so, for each PERSON state: <br>
							(a) the name, ADDRESS, and telephone number of the
							PERSON; <br>
							(b) the statute, ordinance, or regulation allegedly violated; <br>
							(c) whether the PERSON entered a plea in response to the
							citation or charge and, if so, the plea entered; and <br>
							(d) the name and ADDRESS of the court or administrative
							agency, names of the parties, and case number.'
        ]);
        $question->create([
            'q_no'     => '15_1',
            'question' => 'Identify each denial of a material allegation and each
							special or affirmative defense in your pleadings and for
							each: <br>
							(a) state all facts upon which you base the denial or special
							or affirmative defense; <br>
							(b) state the names, ADDRESSES, and telephone numbers
							of all PERSONS who have knowledge of those facts;
							and <br>
							(c) identify all DOCUMENTS and other tangible things that
							support your denial or special or affirmative defense, and
							state the name, ADDRESS, and telephone number of
							the PERSON who has each DOCUMENT.'
        ]);
        $question->create([
            'q_no'     => '16_1',
            'question' => 'Do you contend that any PERSON, other than you or
							plaintiff, contributed to the occurrence of the INCIDENT or
							the injuries or damages claimed by plaintiff? If so, for each
							PERSON: <br>
							(a) state the name, ADDRESS, and telephone number of
							the PERSON; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers <br>
							of all PERSONS who have knowledge of the facts; and
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_2',
            'question' => 'Do you contend that plaintiff was not injured in the
							INCIDENT? If so: <br> 
							(a) state all facts upon which you base your contention;<br> 
							(b) state the names, ADDRESSES, and telephone numbers
							of all PERSONS who have knowledge of the facts; and <br>
							(c) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_3',
            'question' => 'Do you contend that the injuries or the extent of the
							injuries claimed by plaintiff as disclosed in discovery
							proceedings thus far in this case were not caused by the
							INCIDENT? If so, for each injury: <br>
							(a) identify it; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers 
							of all PERSONS who have knowledge of the facts; and<br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_4',
            'question' => 'Do you contend that any of the services furnished by
							any HEALTH CARE PROVIDER claimed by plaintiff in
							discovery proceedings thus far in this case were not due to
							the INCIDENT? If so: <br>
							(a) identify each service; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers 
							of all PERSONS who have knowledge of the facts; and <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_5',
            'question' => 'Do you contend that any of the costs of services
							furnished by any HEALTH CARE PROVIDER claimed as
							damages by plaintiff in discovery proceedings thus far in
							this case were not necessary or unreasonable? If so:
							(a) identify each cost; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers 
							of all PERSONS who have knowledge of the facts; and <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_6',
            'question' => 'Do you contend that any part of the loss of earnings or
							income claimed by plaintiff in discovery proceedings thus far
							in this case was unreasonable or was not caused by the
							INCIDENT? If so: <br>
							(a) identify each part of the loss; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers
							of all PERSONS who have knowledge of the facts; and <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_7',
            'question' => 'Do you contend that any of the property damage
							claimed by plaintiff in discovery Proceedings thus far in this
							case was not caused by the INCIDENT? If so: <br>
							(a) identify each item of property damage; <br>
							(b) state all facts upon which you base your contention; <br>
							(c) state the names, ADDRESSES, and telephone numbers 
							of all PERSONS who have knowledge of the facts; and <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_8',
            'question' => 'Do you contend that any of the costs of repairing the
property damage claimed by plaintiff in discovery
proceedings thus far in this case were unreasonable? If so:
			(a) identify each cost item;  <br>
							(b) state all facts upon which you base your contention;  <br>
							(c) state the names, ADDRESSES, and telephone numbers
							of all PERSONS who have knowledge of the facts; and  <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your contention and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);
        $question->create([
            'q_no'     => '16_9',
            'question' => 'Do YOU OR ANYONE ACTING ON YOUR BEHALF
							have any DOCUMENT (for example, insurance bureau
							index reports) concerning claims for personal injuries made
							before or after the INCIDENT by a plaintiff in this case? If
							so, for each plaintiff state: <br>
							(a) the source of each DOCUMENT; <br>
							(b) the date each claim arose; <br>
							(c) the nature of each claim; and <br>
							(d) the name, ADDRESS, and telephone number of the
							PERSON who has each DOCUMENT.'
        ]);
        $question->create([
            'q_no'     => '16_10',
            'question' => 'Do YOU OR ANYONE ACTING ON YOUR BEHALF
							have any DOCUMENT concerning the past or present
							physical, mental, or emotional condition of any plaintiff in
							this case from a HEALTH CARE PROVIDER not previously
							identified (except for expert witnesses covered by Code of
							Civil Procedure sections 2034.210–2034.310)? If so, for
							each plaintiff state: <br>
							(a) the name, ADDRESS, and telephone number of each
							HEALTH CARE PROVIDER; <br>
							(b) a description of each DOCUMENT; and <br>
							(c) the name, ADDRESS, and telephone number of the
							PERSON who has each DOCUMENT.'
        ]);
        $question->create([
            'q_no'     => '17_1',
            'question' => 'Is your response to each request for admission served
							with these interrogatories an unqualified admission? If not,
							for each response that is not an unqualified admission: <br>
							(a) state the number of the request; <br>
							(b) state all facts upon which you base your response; <br>
							(c) state the names, ADDRESSES, and telephone numbers
							of all PERSONS who have knowledge of those facts;
							and <br>
							(d) identify all DOCUMENTS and other tangible things that
							support your response and state the name, ADDRESS,
							and telephone number of the PERSON who has each
							DOCUMENT or thing.'
        ]);

        $question->create([
            'q_no'     => '20_1',
            'question' => 'State the date, time, and place of the INCIDENT
(closest street ADDRESS or intersection).'
        ]);
        $question->create([
            'q_no'     => '20_2',
            'question' => 'For each vehicle involved in the INCIDENT, state: <br>
							(a) the year, make, model, and license number; <br>
							(b) the name, ADDRESS, and telephone number of the
							driver; <br>
							(c) the name, ADDRESS, and telephone number of each
							occupant other than the driver; <br>
							(d) the name, ADDRESS, and telephone number of each
							registered owner; <br>
							(e) the name, ADDRESS, and telephone number of each
							lessee; <br>
							(f) the name, ADDRESS, and telephone number of each
							owner other than the registered owner or lien holder;
							and <br>
							(g) the name of each owner who gave permission or
							consent to the driver to operate the vehicle.'
        ]);
        $question->create([
            'q_no'     => '20_3',
            'question' => 'State the ADDRESS and location where your trip
began and the ADDRESS and location of your destination.'
        ]);
        $question->create([
            'q_no'     => '20_4',
            'question' => 'Describe the route that you followed from the
							beginning of your trip to the location of the INCIDENT, and
							state the location of each stop, other than routine traffic
							stops, during the trip leading up to the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '20_5',
            'question' => 'Describe the route that you followed from the
							beginning of your trip to the location of the INCIDENT, and
							state the location of each stop, other than routine traffic
							stops, during the trip leading up to the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '20_6',
            'question' => 'Did the INCIDENT occur at an intersection? If so,
							describe all traffic control devices, signals, or signs at the
							intersection.'
        ]);
        $question->create([
            'q_no'     => '20_7',
            'question' => 'Was there a traffic signal facing you at the time of the
							INCIDENT? If so, state: <br>
							(a) your location when you first saw it; <br>
							(b) the color; <br>
							(c) the number of seconds it had been that color; and <br>
							(d) whether the color changed between the time you first
							saw it and the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '20_8',
            'question' => 'State how the INCIDENT occurred, giving the speed,
							direction, and location of each vehicle involved: <br>
							(a) just before the INCIDENT; <br>
							(b) at the time of the INCIDENT; and (c) just
							after the INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '20_9',
            'question' => 'Do you have information that a malfunction or defect in
							a vehicle caused the INCIDENT? If so: <br>
							(a) identify the vehicle; <br>
							(b) identify each malfunction or defect; <br>
							(c) state the name, ADDRESS, and telephone number of
							each PERSON who is a witness to or has information
							about each malfunction or defect; and <br>
							(d) state the name, ADDRESS, and telephone number of
							each PERSON who has custody of each defective part.'
        ]);
        $question->create([
            'q_no'     => '20_10',
            'question' => 'Do you have information that any malfunction or
							defect in a vehicle contributed to the injuries sustained in the
							INCIDENT? If so: <br>
							(a) identify the vehicle; <br>
							(b) identify each malfunction or defect; <br>
							(c) state the name, ADDRESS, and telephone number of
							each PERSON who is a witness to or has information
							about each malfunction or defect; and <br>
							(d) state the name, ADDRESS, and telephone number of
each PERSON who has custody of each defective part.'
        ]);
        $question->create([
            'q_no'     => '20_11',
            'question' => 'State the name, ADDRESS, and telephone number of
							each owner and each PERSON who has had possession
							since the INCIDENT of each vehicle involved in the
							INCIDENT.'
        ]);
        $question->create([
            'q_no'     => '50_1',
            'question' => 'For each agreement alleged in the pleadings: <br>  
							(a) identify each DOCUMENT that is part of the agreement
							and for each state the name, ADDRESS, and telephone
							number of each PERSON who has the DOCUMENT; <br>
							(b) state each part of the agreement not in writing, the
							name, ADDRESS, and telephone number of each
							PERSON agreeing to that provision, and the date that
							part of the agreement was made; <br>
							(c) identify all DOCUMENTS that evidence any part of the
							agreement not in writing and for each state the name,
							ADDRESS, and telephone number of each PERSON
							who has the DOCUMENT; <br>
							(d) identify all DOCUMENTS that are part of any
							modification to the agreement, and for each state the
							name, ADDRESS, and telephone number of each
							PERSON who has the DOCUMENT; <br>
							(e) state each modification not in writing, the date, and the
							name, ADDRESS, and telephone number of each
							PERSON agreeing to the modification, and the date the
							modification was made; <br>
							(f) identify all DOCUMENTS that evidence any modification
							of the agreement not in writing and for each state the
							name, ADDRESS, and telephone number of each
							PERSON who has the DOCUMENT.'
        ]);
        $question->create([
            'q_no'     => '50_2',
            'question' => 'Was there a breach of any agreement alleged in the
							pleadings? If so, for each breach describe and give the date
							of every act or omission that you claim is the breach of the
							agreement.'
        ]);
        $question->create([
            'q_no'     => '50_3',
            'question' => 'Was performance of any agreement alleged in the
							pleadings excused? If so, identify each agreement excused
							and state why performance was excused.'
        ]);
        $question->create([
            'q_no'     => '50_4',
            'question' => 'Was any agreement alleged in the pleadings terminated
							by mutual agreement, release, accord and satisfaction, or
							novation? If so, identify each agreement terminated, the date
							of termination, and the basis of the termination.'
        ]);
        $question->create([
            'q_no'     => '50_5',
            'question' => 'Is any agreement alleged in the pleadings unenforce-
							able? If so, identify each unenforceable agreement and
							state why it is unenforceable.'
        ]);
        $question->create([
            'q_no'     => '50_6',
            'question' => 'Is any agreement alleged in the pleadings ambiguous?
							If so, identify each ambiguous agreement and state why it is
							ambiguous.'
        ]);

    }
}
