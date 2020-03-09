<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardiovascularV2Request extends FormRequest
{
  
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
       return [
                              'patient_id'  => 'required|integer',
                              'EC_FechaEvaluacion'  => 'required|date',
                              'EC_LugarEval'        => 'nullable|max:20',
                              'EC_NombreEvaluador'  => 'required|max:20',
                              'EC_EnfCardiaca' => 'nullable|in:0,1',
                                'EC_Infarto' => 'nullable|in:0,1',
                                'EC_ICC' => 'nullable|in:0,1',
                                'EC_Angina' => 'nullable|in:0,1',
                                'EC_Arritmias' => 'nullable|in:0,1',
                                'EC_CardioCong' => 'nullable|in:0,1',
                                'EC_SoplosCard' => 'nullable|in:0,1',
                                'EC_Chagas' => 'nullable|in:0,1',
                                'EC_HTA' => 'nullable|in:0,1',
                                'EC_HTAañoDx' => 'nullable|integer',
                                'EC_HTAtrt' => 'nullable|in:0,1',
                                'EC_Tabaquismo' => 'nullable|in:0,1',
                                'EC_Tiempo_fumando' => 'nullable|integer',
                                'EC_Cigarrillos_dia' => 'nullable|integer',
                                'EC_Marcapaso' => 'nullable|in:0,1',
                                'EC_Dislipidemias' => 'nullable|in:0,1',
                                'EC_Enf_vasculares' => 'nullable|in:0,1',
                                'EC_Traumatismo_Toracico' => 'nullable|in:0,1',
                                'EC_Enf_pulmonar' => 'nullable|in:0,1',
                                'EC_Enf_Tiroidea' => 'nullable|in:0,1',
                                'EC_Enf_renal' => 'nullable|in:0,1',
                                'EC_Revascula_Coronaria' => 'nullable|in:0,1',
                                'EC_Cirugia_valvulas' => 'nullable|in:0,1',
                                'EC_Colagenopatias' => 'nullable|in:0,1',
                                'EC_Enf_SNC' => 'nullable|in:0,1',
                                'EC_Diabetes' => 'nullable|in:0,1',
                                'EC_Fecha_Dxde_DM' => 'nullable|integer',
                                'EC_Insulina' => 'nullable|in:0,1',
                                'EC_DM_controlada' => 'nullable|in:0,1',
                                'EC_EC_Hospt10a' => 'nullable|in:0,1',
                                'EC_Ang_estable' => 'nullable|in:0,1',
                                'EC_Ang_inestable' => 'nullable|in:0,1',
                                'EC_Palpitaciones' => 'nullable|in:0,1',
                                'EC_DPN' => 'nullable|in:0,1',
                                'EC_Disnea_esfuerzo' => 'nullable|in:0,1',
                                'EC_Ortopnea' => 'nullable|in:0,1',
                                'EC_Claudicacion' => 'nullable|in:0,1',
                                'EC_Mareos' => 'nullable|in:0,1',
                                'EC_Sincope' => 'nullable|in:0,1',
                                'EC_Edem_MI' => 'nullable|in:0,1',
                                'EC_Betabloqueadores' => 'nullable|in:0,1',
                                'EC_Calcioantagonistas' => 'nullable|in:0,1',
                                'EC_IECA' => 'nullable|in:0,1',
                                'EC_Diureticos' => 'nullable|in:0,1',
                                'EC_Trt_HTA_SNC' => 'nullable|in:0,1',
                                'EC_Nitratos' => 'nullable|in:0,1',
                                'EC_Digital' => 'nullable|in:0,1',
                                'EC_Amiodarona' => 'nullable|in:0,1',
                                'EC_Quinidina' => 'nullable|in:0,1',
                                'EC_Otros_antiarritmicos' => 'nullable|in:0,1',
                                'EC_Inf_Padre' => 'nullable|in:0,1',
                                'EC_Ang_Padre' => 'nullable|in:0,1',
                                'EC_HTA_Padre' => 'nullable|in:0,1',
                                'EC_ACV_Padre' => 'nullable|in:0,1',
                                'EC_ICC_Padre' => 'nullable|in:0,1',
                                'EC_MuertSub_Padre' => 'nullable|in:0,1',
                                'EC_DM_Padre'     => 'nullable|in:0,1',
                                'EC_Cancer_Padre' => 'nullable|in:0,1',
                                'EC_Inf_Madre'    => 'nullable|in:0,1',
                                'EC_Ang_Madre'    => 'nullable|in:0,1',
                                'EC_HTA_Madre'    => 'nullable|in:0,1',
                                'EC_ACV_Madre'    => 'nullable|in:0,1',
                                'EC_ICC_Madre'    => 'nullable|in:0,1',
                                'EC_Muert_Madre'  => 'nullable|in:0,1',
                                'EC_DM_Madre'     => 'nullable|in:0,1',
                                'EC_Cancer_Madre' => 'nullable|in:0,1',
                                'EC_Inf_Hermanos' => 'nullable|numeric',
                                'EC_Ang_Hermanos' => 'nullable|numeric',
                                'EC_HTA_Hermanos' => 'nullable|integer',
                                'EC_ACV_Hermanos' => 'nullable|integer',
                                'EC_ICC_Hermanos' => 'nullable|integer',
                                'EC_MuertSub_Hermanos' => 'nullable|integer',
                                'EC_DM_Hermanos'     => 'nullable|integer',
                                'EC_Cancer_Hermanos' => 'nullable|integer',
                                'EC_Inf_Hijos' => 'nullable|integer',
                                'EC_Ang_Hijos' => 'nullable|integer',
                                'EC_HTA_Hijos' => 'nullable|integer',
                                'EC_ACV_Hijos' => 'nullable|integer',
                                'EC_ICC_Hijos' => 'nullable|integer',
                                'EC_MuertSub_Hijos'       => 'nullable|integer',
                                'EC_DM_Hijos'             => 'nullable|numeric',
                                'EC_Cancer_Hijos'         => 'nullable|numeric',
                                'EC_Infarto_cardiaco_total' => 'nullable|numeric',
                                'EC_Angor_total'        => 'nullable|numeric',
                                'EC_HTA_TOTAL'          => 'nullable|numeric',
                                'EC_Acv_total'          => 'nullable|numeric',
                                'IEC_cc_total'          => 'nullable|numeric',
                                'EC_Muerte_súbita_total' => 'nullable|numeric',
                                'EC_Diabetes_total'      => 'nullable|numeric',
                                'EC_Cancer_total' => 'nullable|numeric',
                                'EC_FC' => 'nullable|numeric',
                                'EC_FR' => 'nullable|numeric',
                                'EC_PAS_sent' => 'nullable|numeric',
                                'EC_PAD_sent' => 'nullable|numeric',
                                'EC_PAS_pie' => 'nullable|numeric',
                                'EC_PAD_pie' => 'nullable|numeric',
                                'EC_PP_sentado' => 'nullable|numeric',
                                'EC_Disnea' => 'nullable|in:0,1',
                                'EC_ClaudInterm' => 'nullable|in:0,1',
                                'EC_AnorLatiPunt' => 'nullable|numeric',
                                'EC_RitmoCnormal' => 'nullable|in:0,1',
                                'EC_soplo_cardiaco' => 'nullable|in:0,1',
                                'EC_RuidoBajaTona' => 'nullable|in:0,1',
                                'EC_SoploCarotideo' => 'nullable|in:0,1',
                                'EC_FrotePericardico' => 'nullable|in:0,1',
                                'EC_AuscPulnormal' => 'nullable|in:0,1',
                                'EC_Hepatomegalia' => 'nullable|in:0,1',
                                'EC_ReflujoHepa' => 'nullable|in:0,1',
                                'EC_EMI' => 'nullable|in:0,1',
                                'EC_Varicosidades' => 'nullable|in:0,1',
                                'EC_PulsoNormal' => 'nullable|in:0,1',
                                'EC_SoploAbdominal' => 'nullable|in:0,1',
                                'EC_Otros' => 'nullable|in:0,1',
                                'EC__FC'   => 'nullable|max:20',
                                'EC_PR'    => 'nullable|max:20',
                                'EC_QRS'   => 'nullable|max:20',
                                'EC_QT'    => 'nullable|max:20',
                                'EC_AQRS'  => 'nullable|max:20',
                                'EC_supraventiculares' => 'nullable|in:0,1',
                                'EC_ventriculares' => 'nullable|in:0,1',
                                'EC_1de1' => 'nullable|in:0,1',
                                'EC_2de1' => 'nullable|in:0,1',
                                'EC_monomorficas' => 'nullable|in:0,1',
                                'EC_polimorficas' => 'nullable|in:0,1',
                                'EC_bigeminadas' => 'nullable|in:0,1',
                                'EC_trigeminada' => 'nullable|in:0,1',
                                'EC_dupletas' => 'nullable|in:0,1',
                                'EC_derechaincompleto' => 'nullable|in:0,1',
                                'EC_derechacompleto' => 'nullable|in:0,1',
                                'EC_izquierdaincompleto' => 'nullable|in:0,1',
                                'EC_izquierdacompleto' => 'nullable|in:0,1',
                                'EC_hemibloqueoAnt' => 'nullable|in:0,1',
                                'EC_hemibloqueoPost' => 'nullable|in:0,1',
                                'EC_Primer' => 'nullable|in:0,1',
                                'EC_mobitz_I' => 'nullable|in:0,1',
                                'EC_mobitz_II' => 'nullable|in:0,1',
                                'EC_completo' => 'nullable|in:0,1',
                                'EC_bradicardia' => 'nullable|in:0,1',
                                'EC_taquicardiaSinus' => 'nullable|in:0,1',
                                'EC_FA' => 'nullable|in:0,1',
                                'EC_flutterAuricular' => 'nullable|in:0,1',
                                'EC_TPSV' => 'nullable|in:0,1',
                                'EC_WPW' => 'nullable|in:0,1',
                                'EC_TauricularMultifocal' => 'nullable|in:0,1',
                                'EC_AuricularIzq' => 'nullable|in:0,1',
                                'EC_AuricularDer' => 'nullable|in:0,1',
                                'EC_VentriculoIzq' => 'nullable|in:0,1',
                                'EC_VentriculoDer' => 'nullable|in:0,1',
                                'EC_IsqSubepi_Inf' => 'nullable|in:0,1',
                                'EC_IsqSubepi_Septal' => 'nullable|in:0,1',
                                'EC_IsqSubepi_Antsep' => 'nullable|in:0,1',
                                'EC_IsqSubepi_Ant' => 'nullable|in:0,1',
                                'EC_IsqSubepi_AntExt' => 'nullable|in:0,1',
                                'EC_IsqSubend_Inf' => 'nullable|in:0,1',
                                'EC_IsqSubend_Septal' => 'nullable|in:0,1',
                                'EC_IsqSubend_Antsep' => 'nullable|in:0,1',
                                'EC_IsqSubend_Ant' => 'nullable|in:0,1',
                                'EC_IsqSubend_AntExt' => 'nullable|in:0,1',
                                'EC_LesSubepi_Inf' => 'nullable|in:0,1',
                                'EC_LesSubepi_Septal' => 'nullable|in:0,1',
                                'EC_LesSubepi_Antsep' => 'nullable|in:0,1',
                                'EC_LesSubepi_Ant' => 'nullable|in:0,1',
                                'EC_LesSubepi_AntExt' => 'nullable|in:0,1',
                                'EC_LesSubend_Inf' => 'nullable|in:0,1',
                                'EC_LesSubend_Septal' => 'nullable|in:0,1',
                                'EC_LesSubend_Antsep' => 'nullable|in:0,1',
                                'EC_LesSubend_Ant' => 'nullable|in:0,1',
                                'EC_LesSubend_AntExt' => 'nullable|in:0,1',
                                'EC_NecroInf' => 'nullable|in:0,1',
                                'EC_NecroSeptal' => 'nullable|in:0,1',
                                'EC_NecroAntSept' => 'nullable|in:0,1',
                                'EC_NecroAnt' => 'nullable|in:0,1',
                                'EC_NecroExt' => 'nullable|in:0,1',
                                'EC_NecroPost' => 'nullable|in:0,1'                     
        ];
    }
}