<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoreEvaluationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

   
    public function rules()
    {
        return [
             'patient_id'  => 'required|max:4',
             'DatCore'    => 'required|date',
             'Core_Edo_Civil' => 'nullable|in:0,1,2,3,4',
            'Core_NdeHijos'   => 'nullable|max:4',
            'Core_Genero'     => 'nullable|max:4',
            'AgeCore'        => 'nullable|max:4',
            'edu_core'       => 'nullable|max:4',
            'lentes'         => 'nullable|in:0,1',
            'disponib'       => 'nullable|in:0,1',
            'Core_Vision'    => 'nullable',
            'sordo'          => 'nullable|in:0,1',
            'ayuda'          => 'nullable|in:0,1',
            'laterali'       => 'nullable|in:0,1,2,3,4',
            'Core_Hemiparesia' => 'nullable|in:0,1',
            'Core_NdeEvaluacion' => 'nullable|in:0,1,2,3,4',
            'Core_Examinador' => 'required',
            'ori_tiemp2' => 'nullable|max:4',
            'ori_tiemp4' => 'nullable|max:4',
            'ori_tiemp5' => 'nullable|max:4',
            'ori_tiemp1' => 'nullable|max:4',
            'ori_tiemp3' => 'nullable|max:4',
            'ori_tiemptot' => 'nullable|max:4',
            'ori_esp1' => 'nullable|max:4',
            'ori_esp7' => 'nullable|max:4',
            'ori_esp4' => 'nullable|max:4',
            ' ori_esp3' => 'nullable|max:4',
            'ori_esp5' => 'nullable|max:4',
            'ori_esp2' => 'nullable|max:4',
            'ori_esptot' => 'nullable|max:4',
            'orientac' => 'nullable|max:4',
            'Bpr1' => 'nullable|in:A,B,C,D',
            'Bpr2' => 'nullable|in:A,B,C,D',
            'Bpr3' => 'nullable|in:A,B,C,D',
            'Bpr4' => 'nullable|in:A,B,C,D',
            'Bpr5' => 'nullable|in:A,B,C,D',
            'Bpr6' => 'nullable|in:A,B,C,D',
            'Bpr7' => 'nullable|in:A,B,C,D',
            'Bpr8' => 'nullable|in:A,B,C,D',
            'Bpr9' => 'nullable|in:A,B,C,D',
            'Bpr10' => 'nullable|in:A,B,C,D',
            'Bpp1' => 'nullable|max:4',
            'Bpp2' => 'nullable|max:4',
            'Bpp3' => 'nullable|max:4',
            'Bpp4' => 'nullable|max:4',
            'Bpp5' => 'nullable|max:4',
            'Bpp6' => 'nullable|max:4',
            'Bpp7' => 'nullable|max:4',
            'Bpp8' => 'nullable|max:4',
            'Bpp9'      => 'nullable|max:4',
            'Bpp10'     => 'nullable|max:4',
            'Bentonpar' => 'nullable|max:4',
            'Bdr1' => 'nullable|in:A,B,C,D',
            'Bdr2' => 'nullable|in:A,B,C,D',
            'Bdr3' => 'nullable|in:A,B,C,D',
            'Bdr4' => 'nullable|in:A,B,C,D',
            'Bdr5' => 'nullable|in:A,B,C,D',
            'Bdr6' => 'nullable|in:A,B,C,D',
            'Bdr7' => 'nullable|in:A,B,C,D',
            'Bdr8' => 'nullable|in:A,B,C,D',
            'Bdr9' => 'nullable|in:A,B,C,D',
            'Bdr10' => 'nullable|in:A,B,C,D',
            'Bdp1' => 'nullable|max:4',
            'Bdp2' => 'nullable|max:4',
            'Bdp3' => 'nullable|max:4',
            'Bdp4' => 'nullable|max:4',
            'Bdp5' => 'nullable|max:4',
            'Bdp6' => 'nullable|max:4',
            'Bdp7' => 'nullable|max:4',
            'Bdp8' => 'nullable|max:4',
            'Bdp9' => 'nullable|max:4',
            'Bdp10' => 'nullable|max:4',
            'Core_MATTIS_Igual1' => 'nullable|in:0,1',
            'Core_MATTIS_Igual2' => 'nullable|in:0,1',
            'Core_MATTIS_Igual3' => 'nullable|in:0,1',
            'Core_MATTIS_Igual4' => 'nullable|in:0,1',
            'Core_MATTIS_Igual5' => 'nullable|in:0,1',
            'Core_MATTIS_Igual6' => 'nullable|in:0,1',
            'Core_MATTIS_Igual7' => 'nullable|in:0,1',
            'Core_MATTIS_Igual8' => 'nullable|in:0,1',
            'Core_MATTIS_Igual_Total' => 'nullable|max:4',
            'Core_MATTIS_DesIgual1' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual2' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual3' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual4' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual5' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual6' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual7' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual8' => 'nullable|in:0,1',
            'Core_MATTIS_DesIgual_Total' => 'nullable|max:4',
            'Core_MATTIS_Totalscore' => 'nullable|max:4',
            'Core_PRS1_Memoria' => 'nullable|max:4',
            'Core_PRS2_Memoria' => 'nullable|max:4',
            'Core_PRS3_Memoria' => 'nullable|max:4',
            'Core_PRS4_Memoria' => 'nullable|max:4',
            'Core_PRS5_Memoria' => 'nullable|max:4',
            'Core_PRS6_Memoria' => 'nullable|max:4',
            'Core_PRS7_Memoria' => 'nullable|max:4',
            'Core_PRS8_Memoria' => 'nullable|max:4',
            'Core_PRS9_Memoria' => 'nullable|max:4',
            'Core_PRS10_Memoria' => 'nullable|max:4',
            'Core_PRS11_Memoria' => 'nullable|max:4',
            'Core_PRS12_Memoria' => 'nullable|max:4',
            'Core_MemoriaScore' => 'nullable|max:4',
            'Core_PRS1_Reco' => 'nullable|max:4',
            'Core_PRS2_Reco' => 'nullable|max:4',
            'Core_PRS3_Reco' => 'nullable|max:4',
            'Core_PRS4_Reco' => 'nullable|max:4',
            'Core_PRS5_Reco' => 'nullable|max:4',
            'Core_PRS6_Reco' => 'nullable|max:4',
            'Core_PRS7_Reco' => 'nullable|max:4',
            'Core_PRS8_Reco' => 'nullable|max:4',
            'Core_PRS9_Reco' => 'nullable|max:4',
            'Core_PRS10_Reco' => 'nullable|max:4',
            'Core_PRS11_Reco' => 'nullable|max:4',
            'Core_PRS12_Reco' => 'nullable|max:4',
            'Core_Reco' => 'nullable|max:4',
            'Core_TotalPRS' => 'nullable|max:4',
            'Core_Semenjanzas_Preg1' => 'nullable|max:4',
            'Core_Semenjanzas_Preg2' => 'nullable|max:4',
            'Core_Semenjanzas_Preg3' => 'nullable|max:4',
            'Core_Semenjanzas_Preg4' => 'nullable|max:4',
            'Core_Semenjanzas_Preg5' => 'nullable|max:4',
            'Core_Semenjanzas_Preg6' => 'nullable|max:4',
            'Core_Semenjanzas_Preg7' => 'nullable|max:4',
            'Core_Semenjanzas_Preg8' => 'nullable|max:4',
            'Core_Semenjanzas_Preg9' => 'nullable|max:4',
            'Core_Semenjanzas_Preg10' => 'nullable|max:4',
            'Core_Semenjanzas_Preg11' => 'nullable|max:4',
            'Core_Semenjanzas_Preg12' => 'nullable|max:4',
            'Core_Semenjanzas_Preg13' => 'nullable|max:4',
            'Core_Semenjanzas_Preg14' => 'nullable|max:4',
            'Core_Semenjanzas_Totalscore' => 'nullable|max:4',
            'boston_af1a' => 'nullable|max:4',
            'boston_af2a' => 'nullable|max:4',
            'boston_af3a' => 'nullable|max:4',
            'boston_af4a' => 'nullable|max:4',
            'boston_af1b' => 'nullable|max:4',
            'boston_af2b' => 'nullable|max:4',
            'boston_af3b' => 'nullable|max:4',
            'boston_af4b' => 'nullable|max:4',
            'boston_af5a' => 'nullable|max:4',
            'boston_af5b' => 'nullable|max:4',
            'boston_af6a' => 'nullable|max:4',
            'boston_af6b' => 'nullable|max:4',
            'boston_af' => 'nullable|max:4',
            'Core_Repeticion_Frases_Sabes' => 'nullable|max:4',
            'Core_Repeticion_Frases_Tierra' => 'nullable|max:4',
            'Core_Repeticion_Frases_Trabajo' => 'nullable|max:4',
            'Core_Repeticion_Frases_decirte' => 'nullable|max:4',
            'Core_Repeticion_Frases_hazlo' => 'nullable|max:4',
            'Core_Repeticion_Frases_comedor' => 'nullable|max:4',
            'Core_Repeticion_Frases_Radio' => 'nullable|max:4',
            'Core_Repeticion_Frases_Timbre' => 'nullable|max:4',
            'Core_Repeticion_Frases_Total' => 'nullable|max:4',
            'rtiempo' => 'nullable|max:4',
            'racierto' => 'nullable|max:4',
            'rerror' => 'nullable|max:4',
            'romis' => 'nullable|max:4',
            'tmxtpo' => 'nullable|max:4',
            'tmxacier' => 'nullable|max:4',
            'tmxerror' => 'nullable|max:4',
            'tmxomis' => 'nullable|max:4',
            'Core_PrCanc_Rombo_ULorSI' => 'nullable|max:4',
            'Core_PrCanc_Rombo_URorSD' => 'nullable|max:4',
            'Core_PrCanc_Rombo_LLorII' => 'nullable|max:4',
            'Core_PrCanc_Rombo_LRorID' => 'nullable|max:4',
            'Core_PrCanc_TMX_ULorSI' => 'nullable|max:4',
            'Core_PrCanc_TMX_URorSD' => 'nullable|max:4',
            'Core_PrCanc_TMX_LLorII' => 'nullable|max:4',
            'Core_PrCanc_TMX_LRorID' => 'nullable|max:4',
            'rosen1' => 'nullable|max:4',
            'rosen2' => 'nullable|max:4',
            'rosen3' => 'nullable|max:4',
            'rosen4' => 'nullable|max:4',
            'rosen5' => 'nullable|max:4',
            'rosenptj' => 'nullable|max:4',
            'bostonsa' => 'nullable|max:4',
            'bostonec' => 'nullable|max:4',
            'bostonef' => 'nullable|max:4',
            'acptotal' => 'nullable|max:4',
            'Core_Leng_asoconpal_PC' => 'nullable|max:4',
            'Core_Leng_asoconpal_P' => 'nullable|max:4',
            'Core_Leng_asoconpal_Puntaje' => 'nullable|max:4',
            'Core_Leng_asoconpal_PuntajeLimit' => 'nullable|max:4',
            'Core_Leng_Cagoria_Puntaje' => 'nullable|max:6',
            'Core_Leng_Cagoria_Limit' => 'nullable|max:4',
            'Core_Leng_Animales_Puntaje' => 'nullable|max:4',
            'Core_Leng_Repeticion_Puntaje' => 'nullable|max:4',
            'Core_Leng_Repeticion_Limit' => 'nullable|max:4',
            'Core_Leng_Compresion_Puntaje' => 'nullable|max:4',
            'Core_Leng_Compresion_Limit' => 'nullable|max:4',
            'Core_Const_Rosen_Repasados' => 'nullable|max:4',
            'Core_Const_Rosen_Puntaje' => 'nullable|max:4',
            'Core_Const_Rosen_Puntaje_Limit' => 'nullable|max:4',
            'Core_Const_Benton_Puntaje' => 'nullable|max:4',
            'Core_Const_Benton_Puntaje_Limit' => 'nullable|max:4',
            'rtiempo2' => 'nullable|max:4',
            'racierto2' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_Errores' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_Omisiones' => 'nullable|max:4',
            'tmxtpo2' => 'nullable|max:4',
            'tmxacier2' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_Errores' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_Omisiones' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_ULorSI' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_URorSD' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_LLorII' => 'nullable|max:4',
            'Core_Atenc_Cancel_Rombo_LRorID' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_ULorSI' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_URorSD' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_LLorII' => 'nullable|max:4',
            'Core_Atenc_Cancel_TMX_LRorID' => 'nullable|max:4',
            'memtot' => 'nullable|max:4',
            'memtot_limit' => 'nullable|max:4',
            'mlp' => 'nullable|max:4',
            'mlp_limit' => 'nullable|max:4',
            'mediata' => 'nullable|max:4',
            'mediate_limit' => 'nullable|max:4',
            'reconoc' => 'nullable|max:4',
            'reconoc_limit' => 'nullable|max:4',
            'alptot_PB' => 'nullable|max:4',
            'alptot_PC' => 'nullable|max:4',
            'alp' => 'nullable|max:4',
            'crlp_PB' => 'nullable|max:4',
            'crlp_PC' => 'nullable|max:4',
            'crlp' => 'nullable|max:4',
            'Core_Total_Intrusiones' => 'nullable|max:4',
            'Core_Intrusiones_Diferentes' => 'nullable|max:4',
            'Core_Palab_recorda_6intentos' => 'nullable|max:4',
            'bentonm_Puntaje' => 'nullable|max:4',
            'bentonm_Limit' => 'nullable|max:4',
            'orientac_Puntaje' => 'nullable|max:4',
            'orientac_Limit' => 'nullable|max:4',
            'Core_Razo_abs_sem_PB' => 'nullable|max:4',
            'Core_Razo_abs_sem_PC' => 'nullable|max:4',
            'Core_Razo_abs_sem_Edad' => 'nullable|max:4',
            'Core_Razo_abs_sem_puntaje' => 'nullable|max:4',
            'Core_Razo_abs_sem_Limit' => 'nullable|max:4',
            'igual' => 'nullable|max:4',
            'desigual' => 'nullable|max:4',
            'igualtot' => 'nullable|max:4',
            'igualtot_Limit' => 'nullable|max:4',

             //in:DRAFT,PUBLISHED
        ];
    }
}