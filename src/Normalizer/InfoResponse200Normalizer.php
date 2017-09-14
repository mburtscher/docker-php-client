<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class InfoResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\InfoResponse200') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\InfoResponse200) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\InfoResponse200();
        if (property_exists($data, 'Architecture')) {
            $object->setArchitecture($data->{'Architecture'});
        }
        if (property_exists($data, 'Containers')) {
            $object->setContainers($data->{'Containers'});
        }
        if (property_exists($data, 'ContainersRunning')) {
            $object->setContainersRunning($data->{'ContainersRunning'});
        }
        if (property_exists($data, 'ContainersStopped')) {
            $object->setContainersStopped($data->{'ContainersStopped'});
        }
        if (property_exists($data, 'ContainersPaused')) {
            $object->setContainersPaused($data->{'ContainersPaused'});
        }
        if (property_exists($data, 'CpuCfsPeriod')) {
            $object->setCpuCfsPeriod($data->{'CpuCfsPeriod'});
        }
        if (property_exists($data, 'CpuCfsQuota')) {
            $object->setCpuCfsQuota($data->{'CpuCfsQuota'});
        }
        if (property_exists($data, 'Debug')) {
            $object->setDebug($data->{'Debug'});
        }
        if (property_exists($data, 'DiscoveryBackend')) {
            $object->setDiscoveryBackend($data->{'DiscoveryBackend'});
        }
        if (property_exists($data, 'DockerRootDir')) {
            $object->setDockerRootDir($data->{'DockerRootDir'});
        }
        if (property_exists($data, 'Driver')) {
            $object->setDriver($data->{'Driver'});
        }
        if (property_exists($data, 'DriverStatus')) {
            $values = array();
            foreach ($data->{'DriverStatus'} as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $object->setDriverStatus($values);
        }
        if (property_exists($data, 'SystemStatus')) {
            $values_2 = array();
            foreach ($data->{'SystemStatus'} as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $object->setSystemStatus($values_2);
        }
        if (property_exists($data, 'Plugins')) {
            $object->setPlugins($this->denormalizer->denormalize($data->{'Plugins'}, 'DockerPhpClient\\Model\\InfoResponse200Plugins', 'json', $context));
        }
        if (property_exists($data, 'ExperimentalBuild')) {
            $object->setExperimentalBuild($data->{'ExperimentalBuild'});
        }
        if (property_exists($data, 'HttpProxy')) {
            $object->setHttpProxy($data->{'HttpProxy'});
        }
        if (property_exists($data, 'HttpsProxy')) {
            $object->setHttpsProxy($data->{'HttpsProxy'});
        }
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'IPv4Forwarding')) {
            $object->setIPv4Forwarding($data->{'IPv4Forwarding'});
        }
        if (property_exists($data, 'Images')) {
            $object->setImages($data->{'Images'});
        }
        if (property_exists($data, 'IndexServerAddress')) {
            $object->setIndexServerAddress($data->{'IndexServerAddress'});
        }
        if (property_exists($data, 'InitPath')) {
            $object->setInitPath($data->{'InitPath'});
        }
        if (property_exists($data, 'InitSha1')) {
            $object->setInitSha1($data->{'InitSha1'});
        }
        if (property_exists($data, 'KernelVersion')) {
            $object->setKernelVersion($data->{'KernelVersion'});
        }
        if (property_exists($data, 'Labels')) {
            $values_4 = array();
            foreach ($data->{'Labels'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setLabels($values_4);
        }
        if (property_exists($data, 'MemTotal')) {
            $object->setMemTotal($data->{'MemTotal'});
        }
        if (property_exists($data, 'MemoryLimit')) {
            $object->setMemoryLimit($data->{'MemoryLimit'});
        }
        if (property_exists($data, 'NCPU')) {
            $object->setNCPU($data->{'NCPU'});
        }
        if (property_exists($data, 'NEventsListener')) {
            $object->setNEventsListener($data->{'NEventsListener'});
        }
        if (property_exists($data, 'NFd')) {
            $object->setNFd($data->{'NFd'});
        }
        if (property_exists($data, 'NGoroutines')) {
            $object->setNGoroutines($data->{'NGoroutines'});
        }
        if (property_exists($data, 'Name')) {
            $object->setName($data->{'Name'});
        }
        if (property_exists($data, 'NoProxy')) {
            $object->setNoProxy($data->{'NoProxy'});
        }
        if (property_exists($data, 'OomKillDisable')) {
            $object->setOomKillDisable($data->{'OomKillDisable'});
        }
        if (property_exists($data, 'OSType')) {
            $object->setOSType($data->{'OSType'});
        }
        if (property_exists($data, 'OomScoreAdj')) {
            $object->setOomScoreAdj($data->{'OomScoreAdj'});
        }
        if (property_exists($data, 'OperatingSystem')) {
            $object->setOperatingSystem($data->{'OperatingSystem'});
        }
        if (property_exists($data, 'RegistryConfig')) {
            $object->setRegistryConfig($this->denormalizer->denormalize($data->{'RegistryConfig'}, 'DockerPhpClient\\Model\\InfoResponse200RegistryConfig', 'json', $context));
        }
        if (property_exists($data, 'SwapLimit')) {
            $object->setSwapLimit($data->{'SwapLimit'});
        }
        if (property_exists($data, 'SystemTime')) {
            $object->setSystemTime($data->{'SystemTime'});
        }
        if (property_exists($data, 'ServerVersion')) {
            $object->setServerVersion($data->{'ServerVersion'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getArchitecture()) {
            $data->{'Architecture'} = $object->getArchitecture();
        }
        if (null !== $object->getContainers()) {
            $data->{'Containers'} = $object->getContainers();
        }
        if (null !== $object->getContainersRunning()) {
            $data->{'ContainersRunning'} = $object->getContainersRunning();
        }
        if (null !== $object->getContainersStopped()) {
            $data->{'ContainersStopped'} = $object->getContainersStopped();
        }
        if (null !== $object->getContainersPaused()) {
            $data->{'ContainersPaused'} = $object->getContainersPaused();
        }
        if (null !== $object->getCpuCfsPeriod()) {
            $data->{'CpuCfsPeriod'} = $object->getCpuCfsPeriod();
        }
        if (null !== $object->getCpuCfsQuota()) {
            $data->{'CpuCfsQuota'} = $object->getCpuCfsQuota();
        }
        if (null !== $object->getDebug()) {
            $data->{'Debug'} = $object->getDebug();
        }
        if (null !== $object->getDiscoveryBackend()) {
            $data->{'DiscoveryBackend'} = $object->getDiscoveryBackend();
        }
        if (null !== $object->getDockerRootDir()) {
            $data->{'DockerRootDir'} = $object->getDockerRootDir();
        }
        if (null !== $object->getDriver()) {
            $data->{'Driver'} = $object->getDriver();
        }
        if (null !== $object->getDriverStatus()) {
            $values = array();
            foreach ($object->getDriverStatus() as $value) {
                $values_1 = array();
                foreach ($value as $value_1) {
                    $values_1[] = $value_1;
                }
                $values[] = $values_1;
            }
            $data->{'DriverStatus'} = $values;
        }
        if (null !== $object->getSystemStatus()) {
            $values_2 = array();
            foreach ($object->getSystemStatus() as $value_2) {
                $values_3 = array();
                foreach ($value_2 as $value_3) {
                    $values_3[] = $value_3;
                }
                $values_2[] = $values_3;
            }
            $data->{'SystemStatus'} = $values_2;
        }
        if (null !== $object->getPlugins()) {
            $data->{'Plugins'} = $this->normalizer->normalize($object->getPlugins(), 'json', $context);
        }
        if (null !== $object->getExperimentalBuild()) {
            $data->{'ExperimentalBuild'} = $object->getExperimentalBuild();
        }
        if (null !== $object->getHttpProxy()) {
            $data->{'HttpProxy'} = $object->getHttpProxy();
        }
        if (null !== $object->getHttpsProxy()) {
            $data->{'HttpsProxy'} = $object->getHttpsProxy();
        }
        if (null !== $object->getID()) {
            $data->{'ID'} = $object->getID();
        }
        if (null !== $object->getIPv4Forwarding()) {
            $data->{'IPv4Forwarding'} = $object->getIPv4Forwarding();
        }
        if (null !== $object->getImages()) {
            $data->{'Images'} = $object->getImages();
        }
        if (null !== $object->getIndexServerAddress()) {
            $data->{'IndexServerAddress'} = $object->getIndexServerAddress();
        }
        if (null !== $object->getInitPath()) {
            $data->{'InitPath'} = $object->getInitPath();
        }
        if (null !== $object->getInitSha1()) {
            $data->{'InitSha1'} = $object->getInitSha1();
        }
        if (null !== $object->getKernelVersion()) {
            $data->{'KernelVersion'} = $object->getKernelVersion();
        }
        if (null !== $object->getLabels()) {
            $values_4 = array();
            foreach ($object->getLabels() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Labels'} = $values_4;
        }
        if (null !== $object->getMemTotal()) {
            $data->{'MemTotal'} = $object->getMemTotal();
        }
        if (null !== $object->getMemoryLimit()) {
            $data->{'MemoryLimit'} = $object->getMemoryLimit();
        }
        if (null !== $object->getNCPU()) {
            $data->{'NCPU'} = $object->getNCPU();
        }
        if (null !== $object->getNEventsListener()) {
            $data->{'NEventsListener'} = $object->getNEventsListener();
        }
        if (null !== $object->getNFd()) {
            $data->{'NFd'} = $object->getNFd();
        }
        if (null !== $object->getNGoroutines()) {
            $data->{'NGoroutines'} = $object->getNGoroutines();
        }
        if (null !== $object->getName()) {
            $data->{'Name'} = $object->getName();
        }
        if (null !== $object->getNoProxy()) {
            $data->{'NoProxy'} = $object->getNoProxy();
        }
        if (null !== $object->getOomKillDisable()) {
            $data->{'OomKillDisable'} = $object->getOomKillDisable();
        }
        if (null !== $object->getOSType()) {
            $data->{'OSType'} = $object->getOSType();
        }
        if (null !== $object->getOomScoreAdj()) {
            $data->{'OomScoreAdj'} = $object->getOomScoreAdj();
        }
        if (null !== $object->getOperatingSystem()) {
            $data->{'OperatingSystem'} = $object->getOperatingSystem();
        }
        if (null !== $object->getRegistryConfig()) {
            $data->{'RegistryConfig'} = $this->normalizer->normalize($object->getRegistryConfig(), 'json', $context);
        }
        if (null !== $object->getSwapLimit()) {
            $data->{'SwapLimit'} = $object->getSwapLimit();
        }
        if (null !== $object->getSystemTime()) {
            $data->{'SystemTime'} = $object->getSystemTime();
        }
        if (null !== $object->getServerVersion()) {
            $data->{'ServerVersion'} = $object->getServerVersion();
        }
        return $data;
    }
}