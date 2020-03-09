<?php

namespace App\Neuropsychiatric;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class En1f extends Model
{
    use SoftDeletes;
	protected $table="en1f";

    protected $fillable = [  'Hist_ID',
							'patient_id',
							'user_id',
							'fech_neu',
							'Evaluador',
							'Tiempo_MAS',
							'IdiomaMaterno',
							'marita_a',
							'educacio',
							'ocupacio',
							'Auntrabaja',
							'Conquienvive',
							'nombre_inf',
							'parentesco',
							'TieneProblemsalud',
							'Desc_Psalud_a',
							'Desc_Psalud_b',
							'Desc_Psalud_c',
							'Desc_Psalud_d',
							'Desc_Psalud_e',
							'Desc_Psalud_f',
							'ProbleMemoria',
							'CambFuncoti',
							'ProbleLenguaje',
							'TrastOrient',
							'CambPerso',
							'Trastestanim',
							'Alteconducta',
							'InconEsfin',
							'Otros',
							'PacientnoSint',
							'Prens_Sint',
							'Evolucion',
							'Fecha_inic_sint',
							'ante_psi_1version',
							'Depre_tto',
							'mod_tto',
							'Depre_persisten',
							'Perd_actusuales',
							'PerdidaPesoyapetito',
							'Insomnio',
							'Perd_energia_fati',
							'AgitacionPsic',
							'SentCulpa',
							'Dif_concentracion',
							'Ideas_suicidas',
							'Aso_farmacos',
							'Delirio',
							'Alucinaciones',
							'Ilusiones',
							'Relac_ing_farmacos',
							'hta',
							'diab_mel',
							'IM',
							'arritmia',
							'ins_card',
							'Otros_EC',
							'tubercul',
							'broncop',
							'Enf_tiro',
							'cirr_epa',
							'ulcera',
							'in_renal',
							'ins_vasc',
							'acv',
							'trau_cra13_1',
							'no_epile',
							'snc',
							'Cancer',
							'artritri',
							'sífilis',
							'HVI',
							'alcohol',
							'drogas',
							'tabaquis',
							'acv_1',
							'fecha_acv',
							'perd_con',
							'Desvanecimiento',
							'ParalisisFacial',
							'PerdVision',
							'cam_leng',
							'DebilidadParilisis',
							'Perd_sensibilidad',
							'acv_quir',
							'enf_park',
							'Parkinson_fecha',
							'Tto_Parkinson',
							'Otro_cereb_trastorno',
							'Cirugias',
							'Cirugiasa',
							'Cirugiasb',
							'Cirugiasc',
							'Cirugiasd',
							'Cirugiase',
							'Hospitalizacion',
							'Hospitalizaciona',
							'Hospitalizacionb',
							'Hospitalizacionc',
							'Hospitalizaciond',
							'Hospitalizacione',
							'menopaus',
							'tiem_men',
							'warfarin',
							'aines',
							'anti_plq',
							'diurétic',
							'anticonv',
							'insulina',
							'hipoglis',
							'digitál',
							'nitratos',
							'calc_ant',
							'beta_blq',
							'ieca',
							'otr_anth',
							'hipolipe',
							'broncodi',
							'estrogen',
							'tiroide',
							'anticoli',
							'Levodopa_Cardidopa',
							'dopamine',
							'antidepr',
							'antipsic',
							'benzodia',
							'aines2',
							'narcotic',
							'Hidergina',
							'Deprenyl',
							'esteroid',
							'Tacrina',
							'comple_b',
							'otra_vit',
							'BloqueadoresH2',
							'Otrashormonas',
							'otro_med',
							'tomocran',
							'Tomografia_fecha',
							'resonanc',
							'RMI_fecha',
							'SPETC',
							'SPETC_fecha',
							'eeg',
							'Electroencefalograma_date',
							'elecmiog',
							'Fecha_electromiografia',
							'N_pariente_1grado',
							'Inf_corro_familia',
							'Ing_genealogia_dispo',
							'blecot1',
							'blecot2',
							'blecot3',
							'blecot4',
							'blecot5',
							'blecot6',
							'blecot7',
							'blecot8',
							'bleha9',
							'bleha10',
							'bleha11',
							't_funcio',
							'avd_paci',
							'avd_entr',
							'Inf_obt',
							'mme130',
							'mme131',
							'mme132',
							'mme133',
							'mme134',
							'tiempo',
							'mme135',
							'mme136',
							'mme137',
							'mme138',
							'mme139',
							'lugar',
							'orient',
							'mme140',
							'mme141a',
							'mme141b',
							'mme141',
							'mme142a',
							'mme142b',
							'mme142c',
							'mme142',
							'mme143a',
							'mme143b',
							'mme143c',
							'mme143',
							'max_error_mes',
							'max_error_ano',
							'bleav1_rep',
							'bleav144',
							'bleav145',
							'bleav146',
							'bleav147',
							'mme148a',
							'mme148b',
							'mme148c',
							'mme148d',
							'mme148e',
							'mme148',
							'mme149a',
							'mme149b',
							'mme149c',
							'mme149d',
							'mme149e',
							'mme149f',
							'mme149g',
							'mme149h',
							'mme149i',
							'mme149j',
							'mme149',
							'mme150a',
							'mme150b',
							'mme150b',
							'mme150',
							'mme151',
							'mme152',
							'mme153',
							'mme154',
							'EMEMs',
							'EMEMf',
							'bomc',
							'memocdr',
							'oriencdr',
							'juiciocdr',
							'actsoccdr',
							'Hogarcdr',
							'cuidadocdr',
							'cdr',
							'Piel',
							'orl',
							'Cardiova',
							'torax',
							'abdomen',
							'Genitourinario',
							'osteoart',
							'miembros',
							'otros2',
							'Conciencia',
							'Habla',
							'Memoria',
							'Sensibilidad',
							'CampVisual',
							'AgudezaVisual',
							'MovOculares',
							'FondOjo',
							'Audicion',
							'Otros_parescrea',
							'Motor',
							'Movimiento',
							'Marcha',
							'Coordinacion',
							'Tono_muscular',
							'Reflejos',
							'Cuello',
							'Columna',
							'AfasiaMotora',
							'AfasiaSensitiva',
							'Disartria',
							'DeterioVisual',
							'Hostil',
							'Rechaza',
							'Psicotico',
							'Conducta',
							'apatia',
							'TestnoDisponiIdio',
							'Demen_modeaSeve',
							'SignosExtra',
							'HablaLeng',
							'ExpFac',
							'TembRep',
							'rigidez',
							'Cuello2',
							'MSD',
							'MSI',
							'MID',
							'MII',
							'Postura',
							'Bradiquinesia',
							'Marcha2',
							'EP_farmaco',
							'Otro_invMov',
							'Mioclonias',
							'Coreas',
							'Distonias',
							'Tics',
							'Atetosis',
							'Disquinesia_tardia',
							'Balismo',
							'CriterioDelirum',
							'DeterCog_nodement',
							'Cump_demencia',
							'diag_dem',
							'enf_park2',
							'enf_hunt',
							'mov_farm',
							'disqui_t',
							'SintAcv',
							'SingAcv',
							'escleros',
							'Def_vitb12',
							'tumor',
							'Depresion',
							'Hidrocelia',
							'temb_esc',
							'Insf_renal',
							'Alcoholismo',
							'Artritis',
							'broncop2',
							'Otrostrastornos',
							'Neupsi_178',
							'created_at',
							'user_updated',
							'updated_at',
							'user_deleted'
						];

    protected $hidden = ['Hist_ID','id','patient_id', 'user_id','user_updated','user_deleted','created_at','updated_at','deleted_at' ];

    protected $dates = ['created_at','updated_at','deleted_at'];

    public function user()
	{
	    return $this->belongsTo(\App\User::class,'user_id')->withDefault([
	        'name' => 'N/A',
	    ]);
	}

    public function patient() {
        return $this->belongsTo(\App\Patient::class,'patient_id','patient_id')->withDefault([
        		'hist_id' => 0,
        		'cedula' => 0,
        		'first_name' => '',
        		'last_name' => '',
   		 ]);
    }

    public function scopeSearch($query, $search)
    {
		$query->join('patient as p','p.patient_id','en1f.patient_id');

        if(trim($search)) {
        
		return $query->where('p.hist_id', 'LIKE', "%$search%")
					 ->orWhere('p.cedula', 'LIKE', "%$search%")
					 ->orWhere(\DB::RAW("CONCAT_WS(' ',p.first_name, p.second_name, p.last_name, p.second_last_name) "), 'LIKE', "%$search%");
       }
      
    }
}
