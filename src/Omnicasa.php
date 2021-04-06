<?php
namespace Omnicasa;

use Omnicasa\Request\General\{
    GetCategoriesListRequest,
    GetCityListOfObjectsRequest,
    GetCityListRequest,
    GetCountryListRequest,
    GetDepartmentListRequest,
    GetDocumentListRequest,
    GetGeoCityListOfObjectRequest,
    GetGeographicListRequest,
    GetOfficeListRequest,
    GetSiteListRequest,
    GetTypeOfPropertyListRequest,
    GetUserListRequest,
    GetUserRequest,
    ValidateCustomerRequest
};
use Omnicasa\Request\Settings\{
    GetStatusListRequest,
    GetSubstatusListRequest,
    GetWebIDListRequest
};
use Omnicasa\Request\Property\{
    GetAppointmentObjectRequest,
    GetCountPropertiesRequest,
    GetCountProperties2Request,
    GetDeletedPropertyIDsRequest,
    GetNeighbourhoodListRequest,
    GetPointOfInterestListRequest,
    GetPreviousNextOfPropertyRequest,
    GetPreviousNextOfProperty2Request,
    GetPropertiesByIDsRequest,
    GetPropertyListRequest,
    GetPropertyList2Request,
    GetPropertyPictureListRequest,
    GetPropertyRequest,
    GetProperty2Request
};
use Omnicasa\Request\Construction\{
    GetBuildingListRequest,
    GetPreviousNextOfProjectRequest,
    GetProjectListRequest,
    GetProjectPictureListRequest,
    GetProjectRequest,
    GetDeletedProjectIDsRequest
};
use Omnicasa\Request\Contact\{
    CheckDemandLoginRequest,
    ContactOnMeProjectRequest,
    ContactOnMeRequest,
    DemandRegisterRequest,
    DemandRegister2Request,
    GetDemandListRequest,
    GetDemandPersonRequest,
    GetNumberOfDemandsRequest,
    RegisterPersonDemandRequest,
    SaveChangedDemandListRequest,
    UnsubscribeDemandPersonRequest
};
use Omnicasa\Request\Owner\{
	AddPersonToAppointmentRequest,
    CheckPersonLoginRequest,
    CheckPersonLoginMultiOfficeRequest,
    CreateHistoryRequest,
    CreateTaskRequest,
    GetAppearanceHistoriesRequest,
    GetAppointmentOfStatisticsGraphListRequest,
    GetAutomaticHistoriesRequest,
    GetCalendarHistoriesRequest,
    GetCandidateListRequest,
    GetHistoriesTypeRequest,
    GetManyVisitStatisticsOfPropertyRequest,
    GetMatchingStatisticOfPropertyRequest,
    GetMediaAllPropertyTypesStatisticsGraphListRequest,
	GetMediaObjectStatisticsGraphListRequest,
    GetMediaOnlineHistoriesRequest,
    GetOwnerListRequest,
    GetPersonByEmailRequest,
    GetPersonCountRequest,
    GetPersonForgetPasswordRequest,
    GetPersonListRequest,
    GetPersonRelationsRequest,
    GetPersonRequest,
    GetPersonSourceListRequest,
    GetPropertyCheckListRequest,
    GetRelatedPropertiesRequest,
    GetRelationListRequest,
    GetSummaryMediaObjectStatisticsGraphListRequest,
    GetTaskHistoriesRequest,
    GetVisitStatisticOfPropertyRequest,
    MakeRelationRequest,
    RegisterPersonRequest
};
use Omnicasa\Request\Internal\{
    GetInternalPropertyListRequest,
    GetInternalProjectListRequest,
    GetInternalAllLookupTablesRequest
};
use Omnicasa\Response\{
    ListResponseSimple,
    ListResponsePaginated,
    Response,
    ResponseObject
};

final class Omnicasa
{
    protected $customerName;
    protected $customerPassword;

    protected $apiAdapter;
    protected $defaultLanguageId;
    protected $defaultOfficeId;

    public function __construct(string $customer_name, string $customer_password, ?int $default_language_id = null, ?int $default_office_id = null)
    {
        $this->customerName = $customer_name;
        $this->customerPassword = $customer_password;
        $this->defaultLanguageId = $default_language_id;
        $this->defaultOfficeId = $default_office_id;
    }

    // General

    public function validateCustomer(): bool
    {
        return $this->getApiAdapter()->request(new ValidateCustomerRequest());
    }

    public function getOfficeList(): ListResponseSimple
    {
        $response = $this->getApiAdapter()->request(new GetOfficeListRequest());
        return new ListResponseSimple($response);
    }

    public function getSiteList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetSiteListRequest) ? $params : new GetSiteListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getCountryList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetCountryListRequest) ? $params : new GetCountryListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getCityList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetCityListRequest) ? $params : new GetCityListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getCityListOfObjects($params): ListResponseSimple
    {
        $request = ($params instanceof GetCityListOfObjectsRequest) ? $params : new GetCityListOfObjectsRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    public function getGeographicList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetGeographicListRequest) ? $params : new GetGeographicListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getTypeOfPropertyList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetTypeOfPropertyListRequest) ? $params : new GetTypeOfPropertyListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getDepartmentList(): ListResponseSimple
    {
        $response = $this->getApiAdapter()->request(new GetDepartmentListRequest());
        return new ListResponseSimple($response);
    }

    public function getUserList($params = []): ListResponseSimple
    {
        $request = ($params instanceof GetUserListRequest) ? $params : new GetUserListRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    public function getUser($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetUserRequest) ? $params : new GetUserRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getDocumentList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetDocumentListRequest) ? $params : new GetDocumentListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getCategoriesList($params = []): ListResponsePaginated
    {
        if (is_array($params) && count($params) && is_int(array_keys($params)[0])) $params = ['IDs' => $params];
        $request = ($params instanceof GetCategoriesListRequest) ? $params : new GetCategoriesListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getGeoCityListOfObject($params): ListResponseSimple
    {
        $request = ($params instanceof GetGeoCityListOfObjectRequest) ? $params : new GetGeoCityListOfObjectRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    // Settings

    public function getStatusList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetStatusListRequest) ? $params : new GetStatusListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getSubstatusList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetSubstatusListRequest) ? $params : new GetSubstatusListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getWebIDList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetWebIDListRequest) ? $params : new GetWebIDListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    // Property

    public function getCountProperties($params = []): ?array
    {
        $request = ($params instanceof GetCountPropertiesRequest) ? $params : new GetCountPropertiesRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function getPropertyList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetPropertyListRequest) ? $params : new GetPropertyListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPropertiesByIDs($params): ListResponseSimple
    {
        if (is_array($params) && count($params) && is_int(array_keys($params)[0])) $params = ['IDs' => $params];
        $request = ($params instanceof GetPropertiesByIDsRequest) ? $params : new GetPropertiesByIDsRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    public function getCountProperties2($params = []): ?array
    {
        $request = ($params instanceof GetCountProperties2Request) ? $params : new GetCountProperties2Request($params);
        return $this->getApiAdapter()->request($request);
    }

    public function getPropertyList2($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetPropertyList2Request) ? $params : new GetPropertyList2Request($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getProperty($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetPropertyRequest) ? $params : new GetPropertyRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getProperty2($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetProperty2Request) ? $params : new GetProperty2Request($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getPreviousNextOfProperty($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetPreviousNextOfPropertyRequest) ? $params : new GetPreviousNextOfPropertyRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getPropertyPictureList($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetPropertyPictureListRequest) ? $params : new GetPropertyPictureListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPreviousNextOfProperty2($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetPreviousNextOfProperty2Request) ? $params : new GetPreviousNextOfProperty2Request($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getAppointmentObject($params = []): ListResponseSimple
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetAppointmentObjectRequest) ? $params : new GetAppointmentObjectRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    public function getNeighbourhoodList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetNeighbourhoodListRequest) ? $params : new GetNeighbourhoodListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPointOfInterestList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetPointOfInterestListRequest) ? $params : new GetPointOfInterestListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

	public function getDeletedPropertyIDs($params = []): array
	{
		$request = ($params instanceof GetDeletedPropertyIDsRequest) ? $params : new GetDeletedPropertyIDsRequest($params);
		$response = $this->getApiAdapter()->request($request);
		return $response;
	}

    // Construction

    public function getBuildingList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetBuildingListRequest) ? $params : new GetBuildingListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getProject($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetProjectRequest) ? $params : new GetProjectRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getProjectList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetProjectListRequest) ? $params : new GetProjectListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getProjectPictureList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetProjectPictureListRequest) ? $params : new GetProjectPictureListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPreviousNextOfProject($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetPreviousNextOfProjectRequest) ? $params : new GetPreviousNextOfProjectRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getDeletedProjectIDs($params = []): array
    {
        $request = ($params instanceof GetDeletedProjectIDsRequest) ? $params : new GetDeletedProjectIDsRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response;
    }

    // Contact

    public function contactOnMe($params): bool
    {
        $request = ($params instanceof ContactOnMeRequest) ? $params : new ContactOnMeRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function checkDemandLogin($params): Response
    {
        $request = ($params instanceof CheckDemandLoginRequest) ? $params : new CheckDemandLoginRequest($params);
        return new Response($this->getApiAdapter()->request($request));
    }

    public function demandRegister($params): bool
    {
        $request = ($params instanceof DemandRegisterRequest) ? $params : new DemandRegisterRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function demandRegister2($params): bool
    {
        $request = ($params instanceof DemandRegister2Request) ? $params : new DemandRegister2Request($params);
        return $this->getApiAdapter()->request($request);
    }

    public function getDemandPerson($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetDemandPersonRequest) ? $params : new GetDemandPersonRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function unsubscribeDemandPerson($params): bool
    {
        $request = ($params instanceof UnsubscribeDemandPersonRequest) ? $params : new UnsubscribeDemandPersonRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function getNumberOfDemands($params = []): ListResponseSimple
    {
        $request = ($params instanceof GetNumberOfDemandsRequest) ? $params : new GetNumberOfDemandsRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return new ListResponseSimple($response);
    }

    public function getDemandList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetDemandListRequest) ? $params : new GetDemandListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function saveChangedDemand($params): bool
    {
        $request = ($params instanceof SaveChangedDemandListRequest) ? $params : new SaveChangedDemandListRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function contactOnMeProject($params): bool
    {
        $request = ($params instanceof ContactOnMeProjectRequest) ? $params : new ContactOnMeProjectRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function registerPersonDemand($params): Response
    {
        $request = ($params instanceof RegisterPersonDemandRequest) ? $params : new RegisterPersonDemandRequest($params);
        return new Response($this->getApiAdapter()->request($request));
    }

    // Owner login

    public function registerPerson($params): int
    {
        $request = ($params instanceof RegisterPersonRequest) ? $params : new RegisterPersonRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

    public function getPerson($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        else if (is_string($params)) $params = ['Email' => $params];
        $request = ($params instanceof GetPersonRequest) ? $params : new GetPersonRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function checkPersonLogin($params): int
    {
        $request = ($params instanceof CheckPersonLoginRequest) ? $params : new CheckPersonLoginRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

    public function checkPersonLoginMultiOffice($params): Response
    {
        $request = ($params instanceof CheckPersonLoginMultiOfficeRequest) ? $params : new CheckPersonLoginMultiOfficeRequest($params);
        return new Response($this->getApiAdapter()->request($request));
    }

    public function getPersonForgetPassword($params): string
    {
        if (is_string($params)) $params = ['Email' => $params];
        $request = ($params instanceof GetPersonForgetPasswordRequest) ? $params : new GetPersonForgetPasswordRequest($params);
        return $this->getApiAdapter()->request($request);
    }

    public function getPersonList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetPersonListRequest) ? $params : new GetPersonListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPersonCount($params = []): int
    {
        $request = ($params instanceof GetPersonCountRequest) ? $params : new GetPersonCountRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

    public function getAppearanceHistories($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetAppearanceHistoriesRequest) ? $params : new GetAppearanceHistoriesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getAutomaticHistories($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetAutomaticHistoriesRequest) ? $params : new GetAutomaticHistoriesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getCalendarHistories($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetCalendarHistoriesRequest) ? $params : new GetCalendarHistoriesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getMediaOnlineHistories($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetMediaOnlineHistoriesRequest) ? $params : new GetMediaOnlineHistoriesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getTaskHistories($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetTaskHistoriesRequest) ? $params : new GetTaskHistoriesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getVisitStatisticOfProperty($params): Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetVisitStatisticOfPropertyRequest) ? $params : new GetVisitStatisticOfPropertyRequest($params);
        return new Response($this->getApiAdapter()->request($request));
    }

    public function getHistoriesType($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetHistoriesTypeRequest) ? $params : new GetHistoriesTypeRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function createHistory($params): int
    {
        $request = ($params instanceof CreateHistoryRequest) ? $params : new CreateHistoryRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

    public function getRelatedProperties($params): ListResponsePaginated
    {
        if (is_string($params)) $params = ['Email' => $params];
        $request = ($params instanceof GetRelatedPropertiesRequest) ? $params : new GetRelatedPropertiesRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPersonByEmail($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        else if (is_string($params)) $params = ['Email' => $params];
        $request = ($params instanceof GetPersonByEmailRequest) ? $params : new GetPersonByEmailRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getPersonRelations($params): Response
    {
        if (is_string($params)) $params = ['Email' => $params];
        $request = ($params instanceof GetPersonRelationsRequest) ? $params : new GetPersonRelationsRequest($params);
        return new Response($this->getApiAdapter()->request($request));
    }

    public function makeRelation($params): int
    {
        $request = ($params instanceof MakeRelationRequest) ? $params : new MakeRelationRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

	public function addPersonToAppointment($params): int
	{
		$request = ($params instanceof AddPersonToAppointmentRequest) ? $params : new AddPersonToAppointmentRequest($params);
		return intval($this->getApiAdapter()->request($request));
	}

	public function getMediaObjectStatisticsGraphList($params = []): ListResponsePaginated
	{
		$request = ($params instanceof GetMediaObjectStatisticsGraphListRequest) ? $params : new GetMediaObjectStatisticsGraphListRequest($params);
		return new ListResponsePaginated($request, $this->getApiAdapter());
	}

	public function getMediaAllPropertyTypesStatisticsGraphList($params = []): ListResponsePaginated
	{
		$request = ($params instanceof GetMediaAllPropertyTypesStatisticsGraphListRequest) ? $params : new GetMediaAllPropertyTypesStatisticsGraphListRequest($params);
		return new ListResponsePaginated($request, $this->getApiAdapter());
	}

    public function getManyVisitStatisticsOfProperty($params): ListResponseSimple
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetManyVisitStatisticsOfPropertyRequest) ? $params : new GetManyVisitStatisticsOfPropertyRequest($params);
        return new ListResponseSimple($this->getApiAdapter()->request($request));
    }

    public function getMatchingStatisticOfProperty($params): ?Response
    {
        if (is_int($params)) $params = ['ID' => $params];
        $request = ($params instanceof GetMatchingStatisticOfPropertyRequest) ? $params : new GetMatchingStatisticOfPropertyRequest($params);
        $response = $this->getApiAdapter()->request($request);
        return $response ? new Response($response) : null;
    }

    public function getSummaryMediaObjectStatisticsGraphList($params = []): ListResponseSimple
    {
        $request = ($params instanceof GetSummaryMediaObjectStatisticsGraphListRequest) ? $params : new GetSummaryMediaObjectStatisticsGraphListRequest($params);
        return new ListResponseSimple($this->getApiAdapter()->request($request));
    }

    public function getAppointmentOfStatisticsGraphList($params = []): ListResponseSimple
    {
        $request = ($params instanceof GetAppointmentOfStatisticsGraphListRequest) ? $params : new GetAppointmentOfStatisticsGraphListRequest($params);
        return new ListResponseSimple($this->getApiAdapter()->request($request));
    }

    public function getOwnerList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetOwnerListRequest) ? $params : new GetOwnerListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPersonSourceList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetPersonSourceListRequest) ? $params : new GetPersonSourceListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function createTask($params): int
    {
        $request = ($params instanceof CreateTaskRequest) ? $params : new CreateTaskRequest($params);
        return intval($this->getApiAdapter()->request($request));
    }

    public function getCandidateList($params): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetCandidateListRequest) ? $params : new GetCandidateListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getRelationList($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetRelationListRequest) ? $params : new GetRelationListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getPropertyCheckList($params = []): ListResponsePaginated
    {
        if (is_int($params)) $params = ['ObjectID' => $params];
        $request = ($params instanceof GetPropertyCheckListRequest) ? $params : new GetPropertyCheckListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    // Internal

    public function getInternalPropertyList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetInternalPropertyListRequest) ? $params : new GetInternalPropertyListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getInternalProjectList($params = []): ListResponsePaginated
    {
        $request = ($params instanceof GetInternalProjectListRequest) ? $params : new GetInternalProjectListRequest($params);
        return new ListResponsePaginated($request, $this->getApiAdapter());
    }

    public function getInternalAllLookupTables($table_names): ?array
    {
        if (is_array($table_names)) $table_names = implode(',', $table_names);

        $request = new GetInternalAllLookupTablesRequest(['TableNames' => strval($table_names)]);
        $response = $this->getApiAdapter()->request($request);

        if (empty($response)) {
            return null;
        }

        // Decode response
        $response = json_decode($response);
        if (empty($response)) {
            return null;
        }

        $result = [];
        foreach ($response as $table) {
            foreach ($table as $internal_table_name => $table_values) {
                $internal_table_name = preg_replace('/^Internal/i', '', $internal_table_name);
                $result[$internal_table_name] = new ListResponseSimple($table_values);
            }
        }

        return $result;
    }

    // API adapter

    public function setApiAdapter(ApiAdapterInterface $api_adapter)
    {
        $default = [
            'CustomerName'     => $this->customerName,
            'customerPassword' => $this->customerPassword,
        ];

        if (!empty($this->defaultLanguageId)) $default['LanguageId'] = $this->defaultLanguageId;
        if (!empty($this->defaultOfficeId)) $default['OfficeID'] = $this->defaultOfficeId;

        $api_adapter->setDefaultParams($default);
        $this->apiAdapter = $api_adapter;
    }

    public function getApiAdapter(): ApiAdapterInterface
    {
        if (empty($this->apiAdapter)) {
            $this->setApiAdapter(new HttpApiAdapter());
        }
        return $this->apiAdapter;
    }
}
